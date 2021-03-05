<?php

class Sesion{

    public function __construct(){
        session_start();
    }

    public function setUsuario($user){
        $_SESSION['user'] = $user;
    }

    public function getUsuario(){
        return $_SESSION['user'];
    }

    public function cerrarSesion(){
        session_unset();
        session_destroy();
    }
}

?>