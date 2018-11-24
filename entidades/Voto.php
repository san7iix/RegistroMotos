<?php


  class Voto{
    private $id_voto;
    private $id_mesa;
    private $id_candidato;
    private $cantidad;

  public function getId_voto(){
    return $this->id_voto;
  }

  public function setId_voto($id_voto){
    $this->id_voto = $id_voto;
  }

  public function getId_mesa(){
    return $this->id_mesa;
  }

  public function setId_mesa($id_mesa){
    $this->id_mesa = $id_mesa;
  }

  public function getId_candidato(){
    return $this->id_candidato;
  }

  public function setId_candidato($id_candidato){
    $this->id_candidato = $id_candidato;
  }

  public function getCantidad(){
    return $this->cantidad;
  }

  public function setCantidad($cantidad){
    $this->cantidad = $cantidad;
  }
}
?>
