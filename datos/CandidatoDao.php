<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "conexion.php";
  include "$dir/entidades/Candidato.php";

  class CandidatoDao extends Conexion{

    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }

    public static function listarCandidatos(){
      try
      {
        $query = "SELECT *
                  FROM candidato c
                  inner join usuario u
                  on u.codigo = c.idUsuario
                  WHERE c.id_organo = 1 or c.id_organo=2";
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

    public static function listarCandidatosF($idFacultad){
      try
      {
        $query = "SELECT c.idUsuario,c.numero,c.id_organo,c.foto,u.nombre1,u.apellido1
                  from candidato c
                  inner join usuario u
                  on u.codigo = c.idUsuario
                  inner join programa p
                  on p.id_programa = u.id_programa
                  inner join facultad f
                  on f.id_facultad = p.id_facultad
                  where p.id_facultad = :idFacultad and c.id_organo=3";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":idFacultad",$idFacultad);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
      }
      catch(Exception $e)
      {
        die($e->getMessage());
      }

    }
    public static function listarCandidatosP($idPrograma){
      try
      {
        $query = "SELECT c.idUsuario,c.numero,c.id_organo,c.foto,u.nombre1,u.apellido1
                  from candidato c
                  inner join usuario u
                  on u.codigo = c.idUsuario
                  inner join programa p
                  on p.id_programa = u.id_programa
                  inner join facultad f
                  on f.id_facultad = p.id_facultad
                  where p.id_programa = :idPrograma and c.id_organo = 4";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":idPrograma",$idPrograma);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
      }
      catch(Exception $e)
      {
        die($e->getMessage());
      }
    }

    public static function buscarFacultad($idPrograma){
      try
      {
        $query = "SELECT *
                  from programa
                  where id_programa = :idPrograma";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":idPrograma",$idPrograma);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
      }
      catch(Exception $e)
      {
        die($e->getMessage());
      }

    }

  }

?>
