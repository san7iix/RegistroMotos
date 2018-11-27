<?php
  include "conexion.php";
  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/entidades/Historial.php";


  class HistorialDao extends Conexion{

    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }

    public static function registrarEntrada($historial){

      $query = "INSERT INTO historial (matriculaMoto,entrada) VALUES (:matricula, CURRENT_TIMESTAMP)";

      self::getConexion();

      $resultado = self::$cnx->prepare($query);

      $matricula = $historial->getMatricula();

      $resultado->bindParam(":matricula",$matricula);

      if ($resultado->execute()) {
        return true;
      }else{
        return false;
      }
    }

    public static function buscarM($historial){

      $query = "SELECT * FROM historial where salida is null and matriculaMoto = :matricula;";

      self::getConexion();
      $matricula = $historial->getMatricula();
      $resultado = self::$cnx->prepare($query);
      $resultado->bindParam(":matricula",$matricula);

      $resultado->execute();
      if ($resultado->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public static function verificarMatricula($historial){

      $query = "SELECT * FROM moto WHERE matricula = :matricula;";

      self::getConexion();
      $matricula = $historial->getMatricula();
      $resultado = self::$cnx->prepare($query);
      $resultado->bindParam(":matricula",$matricula);

      $resultado->execute();
      if ($resultado->rowCount() > 0) {
        return true;
      } else {
        return false;
      }
    }

    public static function registrarSalida($historial){

      $query = "UPDATE historial SET salida = CURRENT_TIMESTAMP where salida is null and matriculaMoto = :matricula;";

      self::getConexion();

      $resultado = self::$cnx->prepare($query);

      $matricula = $historial->getMatricula();

      $resultado->bindParam(":matricula",$matricula);

      if ($resultado->execute()) {
        return true;
      }else{
        return false;
      }
    }

  }

?>
