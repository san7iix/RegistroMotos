<?php
  include "conexion.php";
  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/entidades/Bitacora.php";


  class BitacoraDao extends Conexion{

    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }

    public static function Listar(){
      try
      {
        $query = "SELECT * FROM bitacora";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
      }
      catch(Exception $e)
      {
        die($e->getMessage());
      }
     }

     public static function agregarBitacora($bitacora){

       $query = "INSERT INTO bitacora (texto) VALUES (:texto)";

       self::getConexion();

       $resultado = self::$cnx->prepare($query);

       $texto = $bitacora->getTexto();

       $resultado->bindParam(":texto",$texto);

       if ($resultado->execute()) {
         return true;
       }else{
         return false;
       }
     }
  }
