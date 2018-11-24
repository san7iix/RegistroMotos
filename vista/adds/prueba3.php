<?php
$dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
include "$dir/controlador/VotoControlador.php";
?>
      <?php
      foreach (VotoControlador::listarCandidatosPorMesa($_REQUEST['idMesa']) as $r) {
      ?>
      <tr>
        <td><?php echo $r->id_candidato?></td>
        <td><?php echo $r->nombre1." $r->nombre2 $r->apellido1 $r->apellido2"?></td>
        <td><?php echo $r->id_organo; ?></td>
        <td><?php echo $r->total?></td>
      </tr>
    <?php }?>
