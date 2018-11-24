<?php
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/datos/VotoDao.php";

  class VotoControlador{
    public function registrarVoto($id_mesa,$id_candidato){
      $obj_voto = new Voto();
      $obj_voto->setId_mesa($id_mesa);
      $obj_voto->setId_candidato($id_candidato);
      return (VotoDao::registrar($obj_voto));
    }

    public function listarCandidatosPorMesa($mesa)
    {
      return (VotoDao::VotosCandidato($mesa));
    }

    public function votosMesa($mesa)
    {
      return (VotoDao::votosMesa($mesa));
    }

  }

?>
