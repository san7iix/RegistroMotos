<?php
  include "conexion.php";
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/entidades/Mesa.php";

  class MesaDao extends Conexion{

    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }

    public static function ListarMesa(){
      try
      {
        $query = "SELECT m.id_mesa,m.nombre,l.nombre,m.nombre as nombreM
                  FROM Mesa m
                  inner join lugar l
                  on l.id_lugar = m.id_lugar";
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

     public static function Sufragantes($id_mesa){
       try
       {
         $query = "SELECT count(*) as sufragantes
                  FROM mesa m
                  inner join usuario u
                  on u.id_mesa = m.id_mesa
                  where m.id_mesa = :id_mesa and u.idEstado='4'";
         self::getConexion();
         $resultado = self::$cnx->prepare($query);
         $resultado->bindParam(":id_mesa",$id_mesa);
         $resultado->execute();
         self::desconectar();
         return $resultado->fetchAll(PDO::FETCH_OBJ);
       }
       catch(Exception $e)
       {
         die($e->getMessage());
       }
      }

      public static function Votantes($id_mesa){
        try
        {
          $query = "SELECT m.id_mesa,count(*) votantes
                    FROM mesa m
                    inner join usuario u
                    on u.id_mesa = m.id_mesa
                    where u.idEstado = '2' and m.id_mesa=:id_mesa
                    group by m.id_mesa";
          self::getConexion();
          $resultado = self::$cnx->prepare($query);
          $resultado->bindParam(":id_mesa",$id_mesa);
          $resultado->execute();
          self::desconectar();
          return $resultado->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
          die($e->getMessage());
        }
      }



  }
?>
