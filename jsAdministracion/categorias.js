$(document).ready(function () {
    $("#categorias").click(function () {
        $("#contenido").load("administracion_dameCategorias.php");
    });
});