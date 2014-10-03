<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOCategorias
 *
 * @author torres
 */
class DAOCategorias {

    function dameCategorias() {
        $sql = "SELECT * FROM categorias";
        $rs = mysql_query($sql);
        return $rs;
    }

    function guardarCategoria($categoria) {
        $sql = "INSERT INTO categorias (categoria) VALUES ('$categoria')";
        $rs = mysql_query($sql);
        return $rs;
    }

}
