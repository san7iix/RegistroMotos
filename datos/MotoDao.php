<?php
  include "conexion.php";
  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/entidades/Moto.php";

  class MotoDao extends Conexion{

    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }

    public static function registrar($moto){

      $query = "INSERT INTO moto (matricula, tipoMoto, idUsuario) VALUES (:matricula,:tipoMoto,:codigo)";

      self::getConexion();

      $resultado = self::$cnx->prepare($query);

      $codigo = $moto->getId_Usuario();
      $matricula = $moto->getMatricula();
      $tipoMoto = $moto->getTipoMoto();


      $resultado->bindParam(":matricula",$matricula);
      $resultado->bindParam(":tipoMoto",$tipoMoto);
      $resultado->bindParam(":codigo",$codigo);


      if ($resultado->execute()) {
        return true;
      }else{
        return false;
      }
    }

    public static function buscarM($moto){

      $query = "SELECT matricula FROM moto WHERE matricula = :matricula";

      self::getConexion();
      $matricula = $moto->getMatricula();
      $resultado = self::$cnx->prepare($query);
      $resultado->bindParam(":matricula",$matricula);

      $resultado->execute();
      if ($resultado->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }
  }
