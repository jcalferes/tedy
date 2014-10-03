<?php

class dao {

    function usuario_guardar(usuario $ususario, $clave, $fecha) {
        try {
            $query = "INSERT INTO usuario (nombre, apellidoPaterno, apellidoMaterno, correo, pass, tipoUsuario, status, fechaRegistro) "
                    . "VALUES ('" . $ususario->getNombre() . "', '" . $ususario->getApterno() . "', '" . $ususario->getAmaterno() . "', '" . $ususario->getEmail() . "', '" . $ususario->getPass() . "','2', '0', '$fecha')";
            $query_id = "SELECT LAST_INSERT_ID() ID;";
            mysql_query("START TRANSACTION;");
            $ctrl = mysql_query($query);
            if ($ctrl != false) {
                $ctrl = mysql_query($query_id);
                while ($rs = mysql_fetch_array($ctrl)) {
                    $id = $rs["ID"];
                }
            } else {
                throw new Exception();
            }
            $query = "INSERT INTO activarusuario (idUsuario, clave) VALUES ('$id','$clave')";
            $ctrl = mysql_query($query);
            if ($ctrl != false) {
                
            } else {
                throw new Exception();
            }
            $ctrl = $id;
            mysql_query("COMMIT;");
        } catch (Exception $e) {
            $ctrl = mysql_error();
            mysql_query("ROLLBACK;");
        }
        return $ctrl;
    }

    function usuario_activarcuenta($id, $clave) {
        
    }

}
