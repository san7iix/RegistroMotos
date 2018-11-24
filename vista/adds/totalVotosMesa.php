<?php
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/controlador/VotoControlador.php";
  $id_mesa=$_REQUEST['id_mesa'];
  foreach (VotoControlador::votosMesa($id_mesa) as $q) {
    echo "<h3>Total de votos ".$q->votos."</h3>";
  }
?>
