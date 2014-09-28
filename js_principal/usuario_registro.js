//=============================Global===========================================
var lang;
//==============================================================================
$(document).ready(function () {
    lang = $("#lang").text();
    $(".sololetras").validCampoFranz('abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ ');
    $("#txtEmail").validCampoFranz('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890.-_@');
});

$("#btnregistro").click(function () {

    var ctrlnonull;
    $(".nonull").each(function () {
        var valor = $.trim($(this).val());
        if (valor == "") {
            ctrlnonull = 1;
            return false;
        } else {
            ctrlnonull = 0;
        }
    });

    if (ctrlnonull == 1) {
        if (lang == "en") {
            alertify.error("All the text fields are necessary");
            return false;
        } else {
            alertify.error("Todos los campos son obligatorios");
            return false;
        }

    }

    var nombre = $.trim($("#txtNombre").val());
    if (!/^[a-zA-ZñÑ]+$/.test(nombre)) {
        if (lang == "en") {
            alertify.error("Name not valid");
            return false;
        } else {
            alertify.error("Nombre no valido");
            return false;
        }
    }
    var apellidopa = $.trim($("#txtApellidoPaterno").val());
    if (!/^[a-zA-ZñÑ]+$/.test(apellidopa)) {
        if (lang == "en") {
            alertify.error("Firts name not valid");
            return false;
        } else {
            alertify.error("Apellido paterno no valido");
            return false;
        }
    }
    var apellidoma = $.trim($("#txtApellidoMaterno").val());
    if (!/^[a-zA-ZñÑ]+$/.test(apellidoma)) {
        if (lang == "en") {
            alertify.error("Last name not valid");
            return false;
        } else {
            alertify.error("Apellido materno no valido");
            return false;
        }
    }
    var email = $.trim($("#txtEmail").val());
    if (!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        if (lang == "en") {
            alertify.error("Email not valid");
            return false;
        } else {
            alertify.error("Email no valido");
            return false;
        }
    }
    var pass = $.trim($("#txtPass").val());
    var pass2 = $.trim($("#txtPass2").val());
    if (pass != pass2) {
        if (lang == "en") {
            alertify.error("The passwords dont match");
            return false;
        } else {
            alertify.error("Las contraseñas no coinciden");
            return false;
        }
    }





});