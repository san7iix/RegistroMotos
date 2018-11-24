<?php

  include '../controlador/UsuarioControlador.php';
  include '../helps/helps.php';
  session_start();
  header('Content-type: application/json');
  $resultado = array();

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['codigoCrear']) && isset($_POST['passwordCrear']) && isset($_POST['nombre1Crear']) && isset($_POST['nombre2Crear'])  && isset($_POST['apellido1Crear']) && isset($_POST['apellido2Crear']) && isset($_POST['rolCrear'])){

      $codigoC = validar_campo($_POST['codigoCrear']);
      $contraC = validar_campo($_POST['passwordCrear']);
      $nombre1C = validar_campo($_POST['nombre1Crear']);
      $nombre2C = validar_campo($_POST['nombre2Crear']);
      $apellido1C = validar_campo($_POST['apellido1Crear']);
      $apellido2C = validar_campo($_POST['apellido2Crear']);
      $id_rolC = validar_campo($_POST['rolCrear']);
      $id_programa = $_POST['programaCrear'];
      $id_mesa = $_POST['mesaCrear'];
      $id_tipo_usuario = $_POST['tipoUsuarioCrear'];
      $estado = 1;

      if(UsuarioControlador::registrar($codigoC,$nombre1C,$nombre2C,$apellido1C,$apellido2C,$contraC,$id_rolC,$id_programa,$id_mesa,$estado,$id_tipo_usuario)) {
        header("location:admin.php");
      }else{
        header("location:usuario/crud_usuario.php?error=1");
      }
    }
      }
?>
