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

$usuario->setNombre(filter_input(INPUT_POST, 'nombre'));
$usuario->setApterno(filter_input(INPUT_POST, 'apaterno'));
$usuario->setAmaterno(filter_input(INPUT_POST, 'amaterno'));
$usuario->setEmail(filter_input(INPUT_POST, 'email'));

$pass = filter_input(INPUT_POST, 'pass');
$usuario->setPass($passcoded = $uti->genera_md5($pass));

$clave = $uti->genera_password(3, "alfanumerico");
$fecha = date("d/m/Y");

$cn->conectarse();
$ctrl = $dao->usuario_guardar($usuario, $clave, $fecha);
if (!is_numeric($ctrl)) {
    $call = $ctrl;
} else {

    $correo->setPara(filter_input(INPUT_POST, 'email'));
    $correo->setMensaje("<img src='http://imageshack.com/a/img674/6986/1vAPAq.png'><br>Thanks for your register on Mercatodo.<br>To activate your new account click on the following link:"
            . "<br>__________________________________________________________________________<br>"
            . "<br>Gracias por registrarse en Mercatodo. <br>Para activar su nueva cuenta haga clic en el siguiente link:<br><br><a href='http://localhost/tedy/usuario_activarCuenta.php?act_ided=$ctrl&act_coded=$clave'>Click Here</a>");
    $correo->setAsunto("Mercatodo - Wellcome / Bienvenido");
    $uti->enviarCorreoElectronico($correo, $mail);
    $call = 0;
}
echo $call;
$cn->cerrarBd();


