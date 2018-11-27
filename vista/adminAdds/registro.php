<?php


  include '../../controlador/Usuariocontrolador.php';

  if(Usuariocontrolador::obtenerUsuario($_POST['txtCodigo'])) echo "El código que ingresó ya existe.";
  else {
    try {
      UsuarioControlador::registrar($_POST['txtCodigo'],$_POST['txtNombre1'],$_POST['txtNombre2'],$_POST['txtApellido1'],$_POST['txtApellido2'],$_POST['txtContra'],$_POST['txtRol']);
      echo true;
    } catch (\Exception $e) {
      echo $e;
    }

  }
?>
