<?php
include './conexion.php';
include './DAOAdministracion/DAOCategorias.php';
$cn = new coneccion();
$dao = new DAOCategorias();
$cn->conectarse();
$rs = $dao->dameCategorias();
?>
<section>
    <div class="w-section inverse">
        <div class="row" style="height: 200px">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div class="w-section inverse">                       
                    <div class="w-box sign-in-wr bg-5">
                        <div class="form-header">
                            <h2>Modulo de categorias</h2>
                        </div>
                        <div class="form-body">
                            <form role="form" class="form-light padding-15">
                                <div class="form-group">
                                    <label>Categoria.</label>
                                    <input type="text" class="form-control" id="txtCategoria" 
                                           placeholder="Categoria....">
                                </div>
                            </form>
                            <input type="submit" 
                                   onclick="guardarCategoria();"
                                   class="btn btn-primary"
                                   value="Guardar Categoria"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
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
            <tr>
                <td>
                    <strong>
                        <?php echo $rsCategorias["categoria"]; ?>
                    </strong>
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
    
