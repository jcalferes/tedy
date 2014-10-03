<?php

include_once './conexion.php';
include_once './dao.php';

$id = (filter_input(INPUT_GET, "act_ided"));
$clave = (filter_input(INPUT_GET, "act_coded"));

$dao = new dao();
$cn = new coneccion();

$cn->conectarse();
$dao->usuario_activarcuenta($id, $clave);
$cn->cerrarBd();


