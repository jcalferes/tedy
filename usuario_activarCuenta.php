<?php

include_once './conexion.php';
include_once './dao.php';

$codigo = (filter_input(INPUT_GET, "act_ided"));
$clave = (filter_input(INPUT_GET, "act_coded"));

$dao = new dao();
$cn = new coneccion();

$cn->c

