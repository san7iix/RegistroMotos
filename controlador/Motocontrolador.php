<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/datos/MotoDao.php";

  class Motocontrolador{

    public function registrar($idUsuario,$matricula,$tipoMoto){
      $obj_moto = new Moto();
      $obj_moto->setId_Usuario($idUsuario);
      $obj_moto->setMatricula($matricula);
      $obj_moto->setTipoMoto($tipoMoto);
      return (MotoDao::registrar($obj_moto));
    }

    public function obtenerMoto($matricula){
      $obj_moto = new Moto();
      $obj_moto->setMatricula($matricula);
      return (MotoDao::buscarM($obj_moto));
    }

    public function contarMU($codigo){
      $obj_moto = new Moto();
      $obj_moto->setId_Usuario($codigo);
      return (MotoDao::contarMu($obj_moto));
    }

    public function eliminarMoto($matricula){
      $obj_moto = new Moto();
      $obj_moto->setMatricula($matricula);
      return (MotoDao::eliminar($obj_moto));
    }
  }
?>
