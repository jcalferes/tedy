<?php

include_once './email/class.phpmailer.php';
include_once './email/class.smtp.php';
include_once './conexion.php';
include_once './dao.php';
include_once './utilerias.php';
include_once './clases/usuario.php';
include_once './clases/correo.php';

$cn = new conexion();
$dao = new dao();
$uti = new utilerias();
$usuario = new usuario();
$correo = new correo();
$mail = new PHPMailer();

$clave = $uti->genera_password(3, "alfanumerico");

$usuario->setNombre(filter_input(INPUT_POST, 'nombre'));
$usuario->setApterno(filter_input(INPUT_POST, 'apaterno'));
$usuario->setAmaterno(filter_input(INPUT_POST, 'amaterno'));
$usuario->setEmail(filter_input(INPUT_POST, 'email'));

$pass = filter_input(INPUT_POST, 'pass');
$usuario->setPass($passcoded = $uti->genera_md5($pass));

$cn->conectarse();
$ctrl = $dao->usuario_guardar($usuario);
if ($ctrl != true) {
    $call = 1;
} else {
    $correo->setPara(filter_input(INPUT_POST, 'email'));
    $correo->setMensaje("Prueba de correo");
    $correo->setAsunto("Wellcome / Bienvenido Mercatodo");
    $uti->enviarCorreoElectronico($correo, $mail);
    $call = 0;
}
echo $call;
$cn->cerrarBd();


