<?php

class usuario {

    private $nombre;
    private $apterno;
    private $amaterno;
    private $email;
    private $pass;

    function getNombre() {
        return $this->nombre;
    }

    function getApterno() {
        return $this->apterno;
    }

    function getAmaterno() {
        return $this->amaterno;
    }

    function getEmail() {
        return $this->email;
    }

    function getPass() {
        return $this->pass;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApterno($apterno) {
        $this->apterno = $apterno;
    }

    function setAmaterno($amaterno) {
        $this->amaterno = $amaterno;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

}
