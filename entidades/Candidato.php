<?php

  class Candidato{
    private $idUsuario;
    private $numero;
    private $id_organo;
    private $foto;
    private $id;


    public function getIdUsuario(){
  		return $this->idUsuario;
  	}

  	public function setIdUsuario($idUsuario){
  		$this->idUsuario = $idUsuario;
  	}

  	public function getNumero(){
  		return $this->numero;
  	}

  	public function setNumero($numero){
  		$this->numero = $numero;
  	}

  	public function getId_organo(){
  		return $this->id_organo;
  	}

  	public function setId_organo($id_organo){
  		$this->id_organo = $id_organo;
  	}

  	public function getFoto(){
  		return $this->foto;
  	}

  	public function setFoto($foto){
  		$this->foto = $foto;
  	}

  	public function getId(){
  		return $this->id;
  	}

  	public function setId($id){
  		$this->id = $id;
  	}
  }


 ?>
