<?php
require_once 'conexion.php';

class Usuario {
    private $nombre;
    private $email;
    private $Conexion;

    public function Usuario(){        
        $this->Conexion = Conexion::Conectar();
    }

    public function verificarUsuario($email, $password){
        $md5password = md5($password);
        $consulta = $this->Conexion->prepare('SELECT * FROM personas WHERE email = :user AND password = :pass');
        // $consulta->execute(['user' => $email, 'pass' => $password]);
        $consulta->execute(['user' => $email, 'pass' => $md5password]);
        if($consulta->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUsuario($user){
        $consulta = $this->Conexion->prepare('SELECT * FROM personas WHERE email = :user');
        $consulta->execute(['user' => $user]);
        foreach ($consulta as $Usuario) {
            $this->nombre = $Usuario['nombre'];
            $this->usename = $Usuario['email'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>