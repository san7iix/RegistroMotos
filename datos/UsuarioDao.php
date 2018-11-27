<?php
  include "conexion.php";
  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/entidades/Usuario.php";

  class UsuarioDao extends Conexion{

    protected static $cnx;

    public static function getConexion(){
      self::$cnx = Conexion::conectar();
    }

    private static function desconectar(){
      self::$cnx = null;
    }

    public static function login($usuario){

      $query = "SELECT * FROM usuario WHERE codigo = :codig AND password = :pass";

      self::getConexion();
      $codigo= $usuario->getCodigo();
      $pass = $usuario->getPassword();
      $resultado = self::$cnx->prepare($query);
      $resultado->bindParam(":codig",$codigo);
      $resultado->bindParam(":pass",$pass);

      $resultado->execute();

      if ($resultado->rowCount() > 0) {
        $filas = $resultado->fetch();
        if ($filas['codigo']==$usuario->getCodigo() and $filas['password']==$usuario->getPassword()) {
          return true;
        } else {

        }

      } else {
        return false;
      }

    }

    public static function getUsuario($usuario){

      $query = "SELECT codigo,nombre1,nombre2,apellido1,apellido2,id_rol FROM usuario WHERE codigo = :codig AND password = :pass";

      self::getConexion();
      $codigo= $usuario->getCodigo();
      $pass = $usuario->getPassword();
      $resultado = self::$cnx->prepare($query);
      $resultado->bindParam(":codig",$codigo);
      $resultado->bindParam(":pass",$pass);

      $resultado->execute();

      $filas = $resultado->fetch();
      $usuario = new Usuario();
      $usuario->setCodigo($filas['codigo']);
      $usuario->setNombre1($filas['nombre1']);
      $usuario->setNombre2($filas['nombre2']);
      $usuario->setApellido1($filas['apellido1']);
      $usuario->setApellido2($filas['apellido2']);
      $usuario->setId_rol($filas['id_rol']);

      return $usuario;
    }


    public static function registrar($usuario){

      $query = "INSERT INTO usuario (codigo, nombre1, nombre2, apellido1, apellido2, password, id_rol) VALUES (:codigo,:nombre1,:nombre2,:apellido1,:apellido2,:password,:id_rol)";

      self::getConexion();

      $resultado = self::$cnx->prepare($query);

      $codigo= $usuario->getCodigo();
      $nombre1= $usuario->getNombre1();
      $nombre2= $usuario->getNombre2();
      $apellido1= $usuario->getApellido1();
      $apellido2= $usuario->getApellido2();
      $pass = $usuario->getPassword();
      $id_rol = $usuario->getId_rol();

      $resultado->bindParam(":codigo",$codigo);
      $resultado->bindParam(":nombre1",$nombre1);
      $resultado->bindParam(":nombre2",$nombre2);
      $resultado->bindParam(":apellido1",$apellido1);
      $resultado->bindParam(":apellido2",$apellido2);
      $resultado->bindParam(":password",$pass);
      $resultado->bindParam(":id_rol",$id_rol);

      if ($resultado->execute()) {
        return true;
      }else{
        return false;
      }
    }
    public static function Listar(){
      try
      {
        $query = "SELECT * FROM usuario";
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

      public static function getUsuario2($usuario){

        $query = "SELECT codigo,nombre1,nombre2,apellido1,apellido2,id_rol FROM usuario WHERE codigo = :codig";

        self::getConexion();
        $codigo= $usuario->getCodigo();
        $resultado = self::$cnx->prepare($query);
        $resultado->bindParam(":codig",$codigo);

        $resultado->execute();

        $filas = $resultado->fetch();
        $usuario = new Usuario();
        $usuario->setCodigo($filas['codigo']);
        $usuario->setNombre1($filas['nombre1']);
        $usuario->setNombre2($filas['nombre2']);
        $usuario->setApellido1($filas['apellido1']);
        $usuario->setApellido2($filas['apellido2']);
        $usuario->setId_rol($filas['id_rol']);

        return $usuario;
      }


      public static function editar($usuario){

        $query = "UPDATE usuario SET nombre1=:nombre1, nombre2=:nombre2, apellido1=:apellido1, apellido2=:apellido2,password=:password, id_rol=:id_rol WHERE codigo=:codigo";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $codigo= $usuario->getCodigo();
        $nombre1= $usuario->getNombre1();
        $nombre2= $usuario->getNombre2();
        $apellido1= $usuario->getApellido1();
        $apellido2= $usuario->getApellido2();
        $id_rol= $usuario->getId_rol();

        $resultado->bindParam(":codigo",$codigo);
        $resultado->bindParam(":nombre1",$nombre1);
        $resultado->bindParam(":nombre2",$nombre2);
        $resultado->bindParam(":apellido1",$apellido1);
        $resultado->bindParam(":apellido2",$apellido2);
        $resultado->bindParam(":password",$pass);
        $resultado->bindParam(":id_rol",$id_rol);

        if ($resultado->execute()) {
          return true;
        }else{
          return false;
        }
      }

      public static function eliminar($usuario){
        $query = "DELETE FROM usuario WHERE codigo= :codigo";
        self::getConexion();
        $resultado = self::$cnx->prepare($query);
        $codigo = $usuario->getCodigo();
        $resultado->bindParam(":codigo",$codigo);
        if($resultado->execute())return true;
        return false;
      }

      public static function listarMotos($codigo){

          $query = "SELECT * FROM moto WHERE idUsuario=:codigo;";

          self::getConexion();
          $resultado = self::$cnx->prepare($query);
          $resultado->bindParam(":codigo",$codigo);
          $resultado->execute();
          return $resultado->fetchAll(PDO::FETCH_OBJ);

       }

       public static function buscarU($usuario){

         $query = "SELECT codigo FROM usuario WHERE codigo = :codig";

         self::getConexion();
         $codigo= $usuario->getCodigo();
         $resultado = self::$cnx->prepare($query);
         $resultado->bindParam(":codig",$codigo);

         $resultado->execute();
         if ($resultado->rowCount() > 0) {
           return true;
         } else {
           return false;
         }
       }

       public static function ListarMU(){
         try
         {
           $query = "SELECT codigo,nombre1,nombre2,apellido1,apellido2,matricula,tipoMoto FROM usuario as u
           inner join moto as m
           where m.idUsuario=u.codigo";
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


  }
