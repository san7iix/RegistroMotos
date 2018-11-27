<?php

class Historial{
  private $matricula;
  private $entrada;
  private $salida;

  public function getMatricula(){
    return $this->matricula;
  }

  public function setMatricula($matricula){
    $this->matricula = $matricula;
  }

  public function getEntrada(){
    return $this->entrada;
  }

  public function setEntrada($entrada){
    $this->entrada = $entrada;
  }
  public function getSalida(){
    return $this->salida;
  }

  public function setSalida($salida){
    $this->salida = $salida;
  }

}


?>
