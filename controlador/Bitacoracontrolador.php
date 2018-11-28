<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include "$dir/datos/BitacoraDao.php";

  class BitacoraControlador{

    public function listar()
    {
      return (BitacoraDao::listar());
    }

    public function agregarBitacora($descripcion){
      $obj_bitacora = new Bitacora();
      $obj_bitacora->setTexto($descripcion);
      return (BitacoraDao::agregarBitacora($obj_bitacora));
    }

  }


?>
