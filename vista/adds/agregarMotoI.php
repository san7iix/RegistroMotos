<?php

  include '../../controlador/Motocontrolador.php';
  session_start();

  if(Motocontrolador::obtenerMoto($_POST['txtMatricula'])) echo "La matrícula que ingresó ya existe";
  else {
    try {
      Motocontrolador::registrar($_POST['txtCodigo'],$_POST['txtMatricula'],$_POST['txtDescrip']);
      echo true;
    } catch (\Exception $e) {
      echo $e;
    }

  }
?>
