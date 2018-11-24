<?php
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/controlador/MesaControlador.php";
?>

      <?php
      foreach (MesaControlador::listarM() as $r) {
        foreach (MesaControlador::sufragantes($r->id_mesa) as $q) {
          foreach (MesaControlador::votantes($r->id_mesa)  as $k) {
      ?>
      <tr>
        <td ><?php echo $r->nombreM?></td>
        <td><?php echo $r->nombre?></td>
        <td><?php echo $k->votantes ?></td>
        <td><?php echo $q->sufragantes?></td>
        <td>
          <a class="btn btn-success" href="#" value="<?php echo $r->id_mesa;?>">Revisar</a>
      </tr>
    <?php
        }
      }
    }?>
