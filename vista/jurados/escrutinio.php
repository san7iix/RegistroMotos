<?php
  date_default_timezone_set('America/Bogota');
  $hora = date("H");
  include '../config.php';
  include "$dir/controlador/UsuarioControlador.php";

  if($hora >= "07" and $hora<"8"){
    echo "No se puede autorizar votante aún";
  }else{
    if($hora >= "08" and $hora<"16"){
      if(UsuarioControlador::autorizarU($codigo)){
        header("location:jurados/jurado.php");
      }
    }else{
      echo "Generar acta de escrutinio";
      
    }
  }




?>
