

var login;
var  registar;
var z;
var log;
var reg

window.onload= function(){
    login = document.getElementById("formLogin");
    registar = document.getElementById("cadastrar");
    z= document.getElementById("btn");

     log= document.getElementById("login");
    log.onclick=mostrarLogin;
     reg= document.getElementById("registar");
    reg.onclick=mostrarRegistar;
    registar.classList.add("esconder");
    log.style.color="#fff";
}

function mostrarLogin() {
    login.classList.remove("esconder");
    registar.classList.add("esconder");
    z.style.left="0";
    log.style.color="#fff";
    reg.style.color="#ccc";
}

function mostrarRegistar() {
    registar.classList.remove("esconder");
    login.classList.add("esconder");
    z.style.left="110px";
    reg.style.color="#fff";
    log.style.color="#ccc";
}
$("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
        event.preventDefault()
        event.stopPropagation()
    }

    form.addClass('was-validated');
});