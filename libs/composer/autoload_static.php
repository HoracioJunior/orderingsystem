<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit309ad19c190556cb22f8f84f97f2346e
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'Rain\\Tpl' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl.php',
        'Rain\\Tpl\\Exception' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Exception.php',
        'Rain\\Tpl\\IPlugin' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/IPlugin.php',
        'Rain\\Tpl\\NotFoundException' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/NotFoundException.php',
        'Rain\\Tpl\\Plugin' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin.php',
        'Rain\\Tpl\\PluginContainer' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/PluginContainer.php',
        'Rain\\Tpl\\Plugin\\ImageResize' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin/ImageResize.php',
        'Rain\\Tpl\\Plugin\\PathReplace' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/Plugin/Compress.php',
        'Rain\\Tpl\\SyntaxException' => __DIR__ . '/..' . '/rain/raintpl/library/Rain/Tpl/SyntaxException.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'SlimFlashTest' => __DIR__ . '/..' . '/slim/slim/tests/Middleware/FlashTest.php',
        'SlimHttpUtilTest' => __DIR__ . '/..' . '/slim/slim/tests/Http/UtilTest.php',
        'SlimTest' => __DIR__ . '/..' . '/slim/slim/tests/SlimTest.php',
        'Slim\\Environment' => __DIR__ . '/..' . '/slim/slim/Slim/Environment.php',
        'Slim\\Exception\\Pass' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/Pass.php',
        'Slim\\Exception\\RequestSlash' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/RequestSlash.php',
        'Slim\\Exception\\Stop' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/Stop.php',
        'Slim\\Http\\Headers' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Headers.php',
        'Slim\\Http\\Request' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Request.php',
        'Slim\\Http\\Response' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Response.php',
        'Slim\\Http\\Util' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Util.php',
        'Slim\\Log' => __DIR__ . '/..' . '/slim/slim/Slim/Log.php',
        'Slim\\LogWriter' => __DIR__ . '/..' . '/slim/slim/Slim/LogWriter.php',
        'Slim\\Middleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware.php',
        'Slim\\Middleware\\ContentTypes' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/ContentTypes.php',
        'Slim\\Middleware\\Flash' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/Flash.php',
        'Slim\\Middleware\\MethodOverride' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/MethodOverride.php',
        'Slim\\Middleware\\PrettyExceptions' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/PrettyExceptions.php',
        'Slim\\Middleware\\SessionCookie' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/SessionCookie.php',
        'Slim\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Route.php',
        'Slim\\Router' => __DIR__ . '/..' . '/slim/slim/Slim/Router.php',
        'Slim\\Slim' => __DIR__ . '/..' . '/slim/slim/Slim/Slim.php',
        'Slim\\View' => __DIR__ . '/..' . '/slim/slim/Slim/View.php',
        'controllers\\Categoria' => __DIR__ . '/../..' . '/app/controllers/Categoria.php',
        'controllers\\Depoimento' => __DIR__ . '/../..' . '/app/controllers/Depoimento.php',
        'controllers\\Media' => __DIR__ . '/../..' . '/app/controllers/Media.php',
        'controllers\\Produto' => __DIR__ . '/../..' . '/app/controllers/Produto.php',
        'controllers\\Usuario' => __DIR__ . '/../..' . '/app/controllers/Usuario.php',
        'models\\Categoria' => __DIR__ . '/../..' . '/app/models/Categoria.php',
        'models\\Conexao' => __DIR__ . '/../..' . '/app/models/Conexao.php',
        'models\\Depoimento' => __DIR__ . '/../..' . '/app/models/Depoimento.php',
        'models\\NivelAcesso' => __DIR__ . '/../..' . '/app/models/NivelAcesso.php',
        'models\\Produto' => __DIR__ . '/../..' . '/app/models/Produto.php',
        'models\\Usuario' => __DIR__ . '/../..' . '/app/models/Usuario.php',
        'models\\pages\\Page' => __DIR__ . '/../..' . '/app/models/pages/Page.php',
        'models\\pages\\PageAdmin' => __DIR__ . '/../..' . '/app/models/pages/PageAdmin.php',
        'models\\pages\\PageCliente' => __DIR__ . '/../..' . '/app/models/pages/PageCliente.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit309ad19c190556cb22f8f84f97f2346e::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit309ad19c190556cb22f8f84f97f2346e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit309ad19c190556cb22f8f84f97f2346e::$classMap;

        }, null, ClassLoader::class);
    }
}
