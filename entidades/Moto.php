<?php

class Moto{
  private $matricula;
  private $tipoMoto;
  private $idUsuario;


  public function getMatricula(){
    return $this->matricula;
  }

  public function setMatricula($matricula){
    $this->matricula = $matricula;
  }

  public function getTipoMoto(){
  return $this->tipoMoto;
  }

  public function setTipoMoto($tipoMoto){
   $this->tipoMoto = $tipoMoto;
  }

  public function setId_Usuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }

  public function getId_Usuario(){
    return $this->idUsuario;
  }

}

?>
