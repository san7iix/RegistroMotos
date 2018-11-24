<?php

  class Conexion{
    public static function conectar()
    {
      try {
        $cn = new PDO('mysql:host=localhost;dbname=votaciones;charset=utf8', 'root', '');
        $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cn;
      } catch (PDOException $e) {
        die($ex->getMessage());
      }

    }
  }
  Conexion::conectar();
?>
