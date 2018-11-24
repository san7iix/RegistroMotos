<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/datos/MesaDao.php";

  class MesaControlador{
    public function listarM()
    {
      return (MesaDao::ListarMesa());
    }

    public function sufragantes($id_mesa)
    {
      return (MesaDao::Sufragantes($id_mesa));
    }

    public function votantes($id_mesa)
    {
      return (MesaDao::Votantes($id_mesa));
    }
  }
