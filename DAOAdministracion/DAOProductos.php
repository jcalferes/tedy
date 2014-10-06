<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOProductos
 *
 * @author Pablo
 */
class DAOProductos {

    function dameProductos() {
        $sql = "SELECT * FROM productos p 
            inner join usuario u 
            on u.idUsuario = p.idUsuario";
        $rs = mysql_query($sql);
        return $rs;
    }

    function dameProductosUsuario($id) {
        $sql = "SELECT * FROM productos p 
            inner join usuario u 
            on u.idUsuario = p.idUsuario 
            WHERE u.idUsuario = '$id'";
        $rs = mysql_query($sql);
        return $rs;
    }

}

?>
