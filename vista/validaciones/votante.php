<?php

  include '../partials/head.php';
  if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['estado']==1){
      session_destroy();
      echo "<p class='text-center'>No puedes votar, espere a que el jurado o administrador le autorice<p class='text-center'><a href='../index.php' class='btn btn-primary'>Volver</a></p></p>";
    }else{
      if($_SESSION['usuario']['estado']==4){
        session_destroy();
        echo "<p class='text-center'>Usted ya ha votado<p class='text-center'><a href='../index.php' class='btn btn-primary'>Volver</a></p></p>";
      }else{
        header("location:../cambiarEstado.php");
      }
    }
  }else {
    header("location:../index.php");
  }


?>
