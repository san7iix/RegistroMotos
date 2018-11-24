<?php

  class Usuario{

    private $pdo;
    private $codigo;
    private $apellido1;
    private $apellido2;
    private $nombre1;
    private $nombre2;
    private $id_rol;
    private $password;
    private $id_programa;
    private $id_mesa;
    private $idEstado;
    private $idTipoUsuario;

    public function getPdo(){
        return $this->pdo;
    }

public function setPdo($pdo){
  $this->pdo = $pdo;
}

public function getCodigo(){
  return $this->codigo;
}

public function setCodigo($codigo){
  $this->codigo = $codigo;
}

public function getApellido1(){
  return $this->apellido1;
}

public function setApellido1($apellido1){
  $this->apellido1 = $apellido1;
}

public function getApellido2(){
  return $this->apellido2;
}

public function setApellido2($apellido2){
  $this->apellido2 = $apellido2;
}

public function getNombre1(){
  return $this->nombre1;
}

public function setNombre1($nombre1){
  $this->nombre1 = $nombre1;
}

public function getNombre2(){
  return $this->nombre2;
}

public function setNombre2($nombre2){
  $this->nombre2 = $nombre2;
}

public function getId_rol(){
  return $this->id_rol;
}

public function setId_rol($id_rol){
  $this->id_rol = $id_rol;
}

public function getPassword(){
  return $this->password;
}

public function setPassword($password){
  $this->password = $password;
}

public function getId_programa(){
  return $this->id_programa;
}

public function setId_programa($id_programa){
  $this->id_programa = $id_programa;
}

public function getId_mesa(){
  return $this->id_mesa;
}

public function setId_mesa($id_mesa){
  $this->id_mesa = $id_mesa;
}

public function getIdEstado(){
  return $this->idEstado;
}

public function setIdEstado($idEstado){
  $this->idEstado = $idEstado;
}

public function getIdTipoUsuario(){
  return $this->idTipoUsuario;
}

public function setIdTipoUsuario($idTipoUsuario){
  $this->idTipoUsuario = $idTipoUsuario;
}
  }
