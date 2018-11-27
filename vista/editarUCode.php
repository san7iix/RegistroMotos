<?php

  include '../controlador/UsuarioControlador.php';
  include '../helps/helps.php';


  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['codigoCrear']) && isset($_POST['passwordCrear']) && isset($_POST['nombre1Crear']) && isset($_POST['nombre2Crear'])  && isset($_POST['apellido1Crear']) && isset($_POST['apellido2Crear']) && isset($_POST['rolCrear'])){

      $codigoC = validar_campo($_POST['codigoCrear']);
      $contraC = validar_campo($_POST['passwordCrear']);
      $nombre1C = validar_campo($_POST['nombre1Crear']);
      $nombre2C = validar_campo($_POST['nombre2Crear']);
      $apellido1C = validar_campo($_POST['apellido1Crear']);
      $apellido2C = validar_campo($_POST['apellido2Crear']);
      $id_rolC = validar_campo($_POST['rolCrear']);


      if(UsuarioControlador::editar($codigoC,$nombre1C,$nombre2C,$apellido1C,$apellido2C,$contraC,$id_rolC)) {
        echo "true";
      }else{
        echo "false";
      }
    }
      }

?>
