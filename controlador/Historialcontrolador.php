<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/datos/HistorialDao.php";

  class Historialcontrolador{

    public function registrarEntrada($matricula){
      $obj_historial = new Historial();
      $obj_historial->setMatricula($matricula);
      return (HistorialDao::registrarEntrada($obj_historial));
    }

    public function registrarSalida($matricula){
      $obj_historial = new Historial();
      $obj_historial->setMatricula($matricula);
      return (HistorialDao::registrarSalida($obj_historial));
    }

    public function obtenerEntrada($matricula){
      $obj_historial = new Historial();
      $obj_historial->setMatricula($matricula);
      return (HistorialDao::buscarM($obj_historial));
    }

    public function verificarMatricula($matricula){
      $obj_historial = new Historial();
      $obj_historial->setMatricula($matricula);
      return (HistorialDao::verificarMatricula($obj_historial));
    }

    public function ingresoDiario()
    {
      return (HistorialDao::ingresoDiario());
    }

    public function SalidaDiaria()
    {
      return (HistorialDao::SalidaDiaria());
    }

    public function listarHistorial()
    {
      return(HistorialDao::listarH());
    }
  }
?>
