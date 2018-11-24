<?php

  include "conexion.php";
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/entidades/Voto.php";

  class VotoDao extends Conexion{


    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }


    public static function registrar($voto){
      $query = "INSERT INTO voto (id_mesa,id_candidato,cantidad) VALUES (:id_mesa,:id_candidato,:cantidad)";

      self::getConexion();

      $resultado = self::$cnx->prepare($query);

      $id_voto= $voto->getId_voto();
      $id_mesa= $voto->getId_mesa();
      $id_candidato= $voto->getId_candidato();
      $cantidad= "1";

      $resultado->bindParam(":id_mesa",$id_mesa);
      $resultado->bindParam(":id_candidato",$id_candidato);
      $resultado->bindParam(":cantidad",$cantidad);


      if ($resultado->execute()) {
        return true;
      }else{
        return false;
      }
    }
    public static function VotosCandidato($id_mesa){
      try
      {
        $query = "SELECT u.nombre1,u.nombre2,u.apellido1,u.apellido2, v.id_mesa, v.id_candidato, count(v.cantidad) as total,c.id_organo
                  FROM Voto v
                  inner join candidato c
                  on c.idUsuario = v.id_candidato
                  inner join usuario u
                  on u.codigo = c.idUsuario
                  WHERE v.id_mesa=:id_mesa
                  group by id_candidato";
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

     public static function votosMesa($id_mesa){
       try
       {
         $query = "SELECT count(*) votos FROM votaciones.voto WHERE id_mesa = :id_mesa";
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
