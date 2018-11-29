<?php

  include '../../controlador/Motocontrolador.php';
  session_start();

  foreach (Motocontrolador::contarMU(2) as $r) {
    $cantidad = $r->cuenta;
  }

  if(Motocontrolador::obtenerMoto($_POST['txtMatricula'])) echo "La matrícula que ingresó ya existe";
  else {
    if ($cantidad<2) {
      try {
        Motocontrolador::registrar($_POST['txtCodigo'],$_POST['txtMatricula'],$_POST['txtDescrip']);
        echo true;
      } catch (\Exception $e) {
        echo $e;
      }

    } else {
      echo "Usted ya tiene 2 motos registradas.";
    }

  }
?>
