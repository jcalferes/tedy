<?php

include_once './conexion.php';
include_once './dao.php';

$id = (filter_input(INPUT_GET, "act_ided"));
$clave = (filter_input(INPUT_GET, "act_coded"));

$dao = new dao();
$cn = new conexion();

$cn->conectarse();
$ctrl = $dao->usuario_activarcuenta($id, $clave);
if ($ctrl == true) {
    header('Location: ./usuario_cuentaActivada.php');
} else {
    echo "ERROR: $ctrl";
}
$cn->cerrarBd();


