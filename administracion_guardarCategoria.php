<?php

include './DAOAdministracion/DAOCategorias.php';
include './daoconexion/daoConeccion.php';
$cn = new coneccion();
$cn->Conectarse();
$daoCategoria = new DAOCategorias();
$rs = $daoCategoria->guardarCategoria($_GET["categoria"]);
if ($rs == false) {
    echo mysql_error();
} else {
    echo 'Nueva Categoria Disponible';
}
?>
