<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/datos/CandidatoDao.php";

  class CandidatoControlador{

    public function listarC()
    {
      return (CandidatoDao::listarCandidatos());
    }
    public function listarCF($idFacultad)
    {
      return (CandidatoDao::listarCandidatosF($idFacultad));
    }

    public function listarCP($idPrograma)
    {
      return (CandidatoDao::listarCandidatosP($idPrograma));
    }

    public function buscarFacultad($idPrograma)
    {
      return (CandidatoDao::buscarFacultad($idPrograma));
    }
  }

?>
