<?php

class dao {

    function usuario_guardar(usuario $ususario) {
        $query = "INSERT INTO usuario (nombre, apellidoPaterno, apellidoMaterno, correo, pass, tipoUsuario, status) "
                . "VALUES ('" . $ususario->getNombre() . "', '" . $ususario->getApterno() . "', '" . $ususario->getAmaterno() . "', '" . $ususario->getEmail() . "', '" . $ususario->getPass() . "','2', '0')";
        $ctrl = mysql_query($query);
        return $ctrl;
    }

}
