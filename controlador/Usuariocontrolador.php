<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/datos/UsuarioDao.php";

  class UsuarioControlador{

    public static function login($codigo,$password){
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      $obj_usuario->setPassword($password);

      return (UsuarioDao::login($obj_usuario));
    }

    public function getUsuario($codigo,$password){
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      $obj_usuario->setPassword($password);

      return (UsuarioDao::getUsuario($obj_usuario));
    }

    public function registrar($codigo,$nombre1,$nombre2,$apellido1,$apellido2,$password,$id_rol){
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      $obj_usuario->setNombre1($nombre1);
      $obj_usuario->setNombre2($nombre2);
      $obj_usuario->setApellido1($apellido1);
      $obj_usuario->setApellido2($apellido2);
      $obj_usuario->setPassword($password);
      $obj_usuario->setId_rol($id_rol);
      return (UsuarioDao::registrar($obj_usuario));
    }

    public function listarU()
    {
      return (UsuarioDao::listar());
    }

    public function listarMU()
    {
      return (UsuarioDao::listarMU());
    }

    public function autorizarU($codigo)
    {
      return (UsuarioDao::Autorizar($codigo,2));
    }

    public function cambiarEstado($codigo,$estado)
    {
      return (UsuarioDao::Autorizar($codigo,$estado));
    }

    public function obtenerUsuario($codigo){
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      return (UsuarioDao::buscarU($obj_usuario));
    }

    public function editar($codigo,$nombre1,$nombre2,$apellido1,$apellido2,$password,$id_rol){
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      $obj_usuario->setNombre1($nombre1);
      $obj_usuario->setNombre2($nombre2);
      $obj_usuario->setApellido1($apellido1);
      $obj_usuario->setApellido2($apellido2);
      $obj_usuario->setId_rol($id_rol);
      return (UsuarioDao::editar($obj_usuario));
    }

    public function eliminar($codigo)
    {
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      return UsuarioDao::eliminar($obj_usuario);
    }
    public function listarUM($mesa)
    {
      return (UsuarioDao::listarporMesa($mesa));
    }

    public function  buscarVotante($codigo)
    {
      return (UsuarioDao::buscarMesa($codigo));
    }

    public function listarMotos($codigo)
    {
      $obj_usuario = new Usuario();
      $obj_usuario->setCodigo($codigo);
      return (UsuarioDao::listarMotos($codigo));
    }
  }
