//=============================Global===========================================
var lang;
//==============================================================================
$(document).ready(function () {
    lang = $("html").attr('lang');
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

    var chkterminos = $("#chkterminos").is(":checked");
    if (chkterminos != true) {
        if (lang == "en") {
            alertify.error("You must read and accept the terms and conditions");
            return false;
        } else {
            alertify.error("Debes leer y aceptar los terminos y condiciones");
            return false;
        }
    }
    var data = new FormData();

    data.append('nombre', $("#txtNombre").val());
    data.append('apaterno', $("#txtApellidoPaterno").val());
    data.append('amaterno', $("#txtApellidoMaterno").val());
    data.append('email', $("#txtEmail").val());
    data.append('pass', $("#txtPass2").val());
    data.append('lang', lang);

    $.ajax({
        url: 'usuario_guardar.php', //Url a donde la enviaremos
        type: 'POST', //Metodo que usaremos
        contentType: false, //Debe estar en false para que pase el objeto sin procesar
        data: data, //Le pasamos el objeto que creamos con los archivos
        processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache: false //Para que el formulario no guarde cache
    }).done(function (call) {
        if (call == 0) {
            if (lang == "en") {
                window.location.replace("./usuario_verificarEmailEn.php");
                return false;
            } else {
                window.location.replace("./usuario_verificarEmailEs.php");
                return false;
            }
        } else {
            alertify.alert("ERROR: " + call);
        }
    });
});