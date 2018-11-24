<?php
  session_start();
  include '../controlador/VotoControlador.php';
  $mesa = $_SESSION['usuario']['mesa'];

  $c=0;
  for ($i=1; $i<=4 ; $i++) {
    if(VotoControlador::registrarVoto($mesa,$_POST[$i])){
      $c++;
    }
  }

  if($c==4){
    echo "true";
  }else {
    echo "false";
  }

?>
