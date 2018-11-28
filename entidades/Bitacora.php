<?php

  class Bitacora{

    private $id;
    private $texto;
    private $fecha;

    public function get_id(){
      return $this->id;
    }

    public function setId($id){
      $this->id = $id;
    }

    public function getTexto(){
      return $this->texto;
    }

    public function setTexto($texto){
      $this->texto = $texto;
    }

    public function getFecha(){
      return $this->fecha;
    }

    public function setFecha($fecha){
      $this->fecha = $fecha;
    }


  }
