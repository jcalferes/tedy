<?php
include './daoconexion/daoConeccion.php';
include './DAOAdministracion/DAOUsuarios.php';
$cn = new coneccion();
$dao = new DAOUsuarios();
$cn->Conectarse();
$rs = $dao->dameUsuarios();
if ($rs == false) {
    echo mysql_error();
} else {
    if (mysql_affected_rows() > 0) {
        ?>
        <table class="table">
            <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
        </thead>
        <tr>
            <?php while ($rsDatosUsuario = mysql_fetch_array($rs)) {
                ?>
                <td><?php echo $rsDatosUsuario["nombre"]; ?></td>
                <td><?php echo $rsDatosUsuario["apellidoPaterno"] ."&nbsp;". $rsDatosUsuario["apellidoMaterno"]; ?></td>
                <td><?php echo $rsDatosUsuario["correo"]; ?></td>
                <td><?php echo $rsDatosUsuario["telefono"]; ?></td>
            <?php } ?>
        </tr>
        </table>
        <?php
    } else {
        ?>
        <table class="table">
            <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
        </thead>
        <tr class="purple">
            <td colspan="4">
                No hay Usuarios registrados.
            </td>
        </tr>
        </table>
        <?php
    }
}