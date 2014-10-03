<?php

class correo {

    private $mensaje;
    private $para;
    private $asunto;

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getPara() {
        return $this->para;
    }

    public function getAsunto() {
        return $this->asunto;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setPara($para) {
        $this->para = $para;
    }

    public function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

}
