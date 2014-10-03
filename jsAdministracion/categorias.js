$(document).ready(function() {
    $("#categorias").click(function() {
        $("#contenido").load("administracion_dameCategorias.php");
    });

});
function guardarCategoria() {
    var categoria = $("#txtCategoria").val();
    if (categoria == "") {
        alertify.error("Se requiere una Categoria");
    }
    else {
        var info = "categoria=" + categoria;
        $.get("administracion_guardarCategoria.php", info, function(respuesta) {
            alertify.error(respuesta);
            $("#contenido").load("administracion_dameCategorias.php");
        });
    }
}
