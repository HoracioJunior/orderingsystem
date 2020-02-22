<?php


namespace controllers;


use models\Conexao;
use models\Usuario as UsuarioM;
use PHPMailer;

//include "../../libs/phpmailer/phpmailer/PHPMailerAutoload.php";
class Recovery
{
    public static function verficarEmail(){

            $conn = new Conexao();
            $result = $conn ->select("SELECT tb_usuarios.email_usuario FROM tb_usuarios");

            $emails = [];
            foreach ($result as $data)
            {
                foreach ($data as $index => $email){

                    array_push($emails,$email);
                }
            }
            return $emails;
        }

     public function setCodigo(UsuarioM $usuario)
     {
         $conn = new Conexao();
        $emails = Recovery::verficarEmail();
        if(in_array($usuario->getEmailUsuario(), $emails)){
            $token = uniqid();
            $conn->query("INSERT INTO tb_recovery(email_usuario,token) VALUES (:email, :token)", array(
                ":email"=>$usuario->getEmailUsuario(),
                ":token"=>$token
            ));
           Recovery::enviarEmail($usuario->getEmailUsuario(),$token);
           $_SESSION["email"]=$usuario->getEmailUsuario();
            header("Location: /token-check");
            exit();
        }else{
            $mensagem = "O email informado não faz parte do usuarios";
            Recovery::setNaoExiste($mensagem);
            header("Location: /recuperar-senha");
            exit();
        }
     }

     public static function enviarEmail($email, $token)
     {
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Username="horaciotrader95@gmail.com";
         $mail->Password='@868396068@junior@Leonor';
         $mail->SMTPSecure = 'tls';
         $mail->Host = 'smtp.gmail.com';
         $mail->Port = 587;

         $mail->SMTPAuth = true;
         $mail->SMTPOptions = array(
             'ssl' => array(
                 'verify_peer' => false,
                 'verify_peer_name' => false,
                 'allow_self_signed' => true
             )
         );
            $body = "O seu codigo de verificacao: <b>".$token."</b> Copie e cole.";
            $subj = "Codigo de verificacao";
         $mail->isHTML(true);
         $mail->setFrom($email,"Food Ordering System");
         $mail->addAddress("juniorvilanculo95@gmail.com");
         $mail->Subject=$subj;
         $mail->Body=$body;
         $mail->send();

     }
     public static function getToken(){
         $conn = new Conexao();
         $result = $conn ->select("SELECT tb_recovery.token FROM tb_recovery where status ='0'");

         $tokens = [];
         foreach ($result as $data)
         {
             foreach ($data as $index => $token){

                 array_push($tokens,$token);
             }
         }
         return $tokens;
     }

     public function checkToken($token,$email,$senha){

        $token_result=Recovery::getToken();
   ;
        if(in_array($token,$token_result)){
            $conn = new Conexao();
            $conn->query("UPDATE tb_usuarios SET senha_usuario = :senha WHERE email_usario =:email", array(
                ":senha"=>$senha,
                ":email"=>$email
            ));
            Recovery::updateStatus($token);
            $_SESSION["email"]=NULL;
            header("Location: /login");
            exit();
        }else{
            $mensagem = "O codigo intruzido é invalido. verefique e tente novamente";
            Recovery::setNaoExiste($mensagem);
            header("Location: /token-check");
            exit();
        }
     }
     public static function updateStatus($token){
         $conn = new Conexao();
         $status=1;
         $conn->query("UPDATE tb_recovery SET status = :status WHERE token =:token", array(
             ":token"=>$token,
             ":status" =>$status
         ));
     }
    public static function setNaoExiste($msg)
    {
        $_SESSION["recovery"] = $msg;
    }
    public static function getNaoExiste()
    {
        $msg = (isset($_SESSION["recovery"]) && $_SESSION["recovery"]) ? $_SESSION["recovery"] : '';
       Recovery::clearNaoExiste();
        return $msg;
    }

    public static function clearNaoExiste()
    {
        $_SESSION["recovery"] = NULL;
    }
}