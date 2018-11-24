<?php

class Mesa{
  private $id_mesa;
  private $nombre;
  private $id_lugar;


  public function getId_mesa(){
  return $this->id_mesa;
  }

public function setId_mesa($id_mesa){
  $this->id_mesa = $id_mesa;
  }

public function getNombre(){
  return $this->nombre;
  }

public function setNombre($nombre){
  $this->nombre = $nombre;
  }

public function getId_lugar(){
  return $this->id_lugar;
  }

}

?>
