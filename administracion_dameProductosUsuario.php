<?php

include './DAOAdministracion/DAOProductos.php';
include './DAOAdministracion/DAOUsuarios.php';
include './conexion.php';
$dao = new DAOProductos();
$daoUsuarios = new DAOUsuarios();
$cn = new conexion();
$cn->conectarse();
$id = $_GET["id"];
$rs = $dao->dameProductosUsuario($id);
$rsUsuarios = $daoUsuarios->dameUsuarios();
echo '<div><h1>Módulo de productos</h1><div>';
if ($rsUsuarios == false) {
    echo '<table class ="table"><tr><td>' . mysql_error() . '</td></tr></table>';
} else {
    echo '<select onchange="dameProductosUsuario();" id="cmbUsuarios">';

    echo '<option>Seleccione un Usuario</option>';
    while ($datosUsuario = mysql_fetch_array($rsUsuarios)) {
        if ($id == $datosUsuario["idUsuario"]) {
            echo '<option selected="true" value ="' . $datosUsuario["idUsuario"] . '">' . $datosUsuario["nombre"] . '</option>';
        } else {
            echo '<option value ="' . $datosUsuario["idUsuario"] . '">' . $datosUsuario["nombre"] . '</option>';
        }
    }
    echo '</select>';
}
echo '<br>';
echo '<br>';
if ($rs == true) {
    echo '<table class="table">';
    echo '<thead>
            <th><center>Nombre</center></th>
            <th><center>Descripcion</center></th>
            <th><center>Precio</center></th>
            <th><center>Fecha Prublicacion</center></th>
            <th><center>Usuario</center></th>
         </thead>';
    while ($datos = mysql_fetch_array($rs)) {
        echo '<tr>';
        echo '<td><center>' . $datos["nombre"] . '</center></td>';
        echo '<td><center>' . $datos["descripcion"] . '</center></td>';
        echo '<td><center>' . $datos["precio"] . '</center></td>';
        echo '<td><center>' . $datos["fecha"] . '</center></td>';
        echo '<td><center>' . $datos[12] . '</center></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<table class ="table"><tr><td>' . mysql_error() . '</td></tr></table>';
}
$cn->cerrarBd();
?>
<option > 
    
</option>