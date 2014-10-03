<?php
include './conexion.php';
include './DAOAdministracion/DAOCategorias.php';
$cn = new coneccion();
$dao = new DAOCategorias();
$cn->conectarse();
$rs = $dao->dameCategorias();
if ($rs == false) {
    ?>
    <table class="table">
        <thead>
        <th>Categoria</th>
    </thead>
    <tr class="red">
        <td>
            <?php echo mysql_error(); ?>
        </td>
    </tr>
    </table>

    <?php
} else {
    if (mysql_affected_rows() > 0) {
        ?>
        <table class="table">
            <thead>
            <th>Categoria</th>
        </thead>
        <?php while ($rsCategorias = mysql_fetch_array($rs)) { ?>
            <tr class="purple">
                <td>
                    <?php echo $rsCategorias["categoria"]; ?>
                </td>
            </tr>
        <?php } ?>
        </table>

        <?php
    } else {
        ?>
        <table class="table">
            <thead>
            <th>Categoria</th>
        </thead>
        <tr class="purple">
            <td>
                <?php echo "No hay categorias Disponibles" ?>
            </td>
        </tr>
        </table>
        <?php
    }
}
    