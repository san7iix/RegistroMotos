<?php
  date_default_timezone_set('America/Bogota');
  $hora = date("H");
  $minutos = date("i");
  include 'config.php';
  include "$dir/controlador/UsuarioControlador.php";
  $codigo = $_REQUEST['codigo'];

  if($hora >= "07" and $hora<"8"){
    echo "No se puede autorizar votante aún";
  }else{
    if($hora >= "08" and $hora<"16"){
      if(UsuarioControlador::autorizarU($codigo)){
        header("location:jurados/jurado.php");
      }
    }else{
      echo "Ya no se pueden autorizar votantes<br><a href='jurados/jurado.php'>Regresar</a>";
    }
  }

?>
