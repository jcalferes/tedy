<?php
include_once './email/class.phpmailer.php';
include_once './email/class.smtp.php';
include_once './conexion.php';
include_once './dao.php';
include_once './utilerias.php';
include_once './clases/usuario.php';

$cn = new conexion();
$dao = new dao();
$uti = new utilerias();
$usuario = new usuario();

$lang = filter_input(INPUT_POST, 'lang');

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
    $call = 0;
}
echo $call;
$cn->cerrarBd();


