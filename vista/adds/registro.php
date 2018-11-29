<?php


  include '../../controlador/Usuariocontrolador.php';

  if(Usuariocontrolador::obtenerUsuario($_POST['txtCodigo'])) echo "El usuario ya existe";
  else {
    try {
      UsuarioControlador::registrar($_POST['txtCodigo'],$_POST['txtNombre1'],$_POST['txtNombre2'],$_POST['txtApellido1'],$_POST['txtApellido2'],$_POST['txtContra'],'1');
      echo true;
    } catch (\Exception $e) {

    }

  }
?>
