<?php

  function validar_campo($campo)
  {
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
  }

?>
