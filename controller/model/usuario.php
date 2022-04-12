<?php
class Usuario{
    private $id;
    private $nomeUsuario;
    private $email;
    public function __construct()
    {
    }
    public function setIdUsuario($idUsuario){
        $this->id = $idUsuario;
    }
    public function getIdUsuario(){
        return $this->id;
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function getEmailUsuario(){
        return $this->email;
    }
    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }
    public function setEmailUsuario($emailUsuario){
        $this->email = $emailUsuario;
    }
}
?>