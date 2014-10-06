$(document).ready(function() {
//     $("#cmbUsuarios option[value=" + 1 + "]").attr("selected", true);
    $("#productos").click(function() {
        $("#contenido").load("administracion_dameProductos.php");
    });
});


function dameProductosUsuario() {
    var id = $("#cmbUsuarios").val();
    if (id > 0) {
        $("#contenido").load("administracion_dameProductosUsuario.php?id=" + id, function() {
        });
    }
}