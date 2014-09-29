<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOUsuarios
 *
 * @author torres
 */
class DAOUsuarios {

    function dameUsuarios() {
        $sql = "SELECT * FROM usuario";
        $rs = mysql_query($sql);

        return $rs;
    }

}
