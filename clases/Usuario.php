<?php

class Usuario

{
    protected $nombre;
    protected $email;
    protected $password;
    protected $repassword;
    public function __construct($email,$password,$repassword=null, $nombre = null){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->repassword = $repassword;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getRepassword(){
        return $this->repassword;
    }
    public function setRepassword($password){
        $this->repassword = $repassword;
    }

}

?>