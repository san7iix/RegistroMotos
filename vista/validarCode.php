<?php
  include 'config.php';
  include "$dir/controlador/UsuarioControlador.php";
  include "$dir/helps/helps.php";
  header('Content-type: application/json');

  session_start();
  $resultado = array();
  if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['txtCodigo']) && isset($_POST['txtContra'])){
      $txtCodigo = validar_campo($_POST['txtCodigo']);
      $txtContra = validar_campo($_POST['txtContra']);

      if(UsuarioControlador::login($txtCodigo,$txtContra)) {
        $resultado = array("estado"=>"true");
        $usuario = UsuarioControlador::getUsuario($txtCodigo,$txtContra);
        $_SESSION['usuario'] = array(
                                        "codigo"=>$usuario->getCodigo(),
                                        "nombre1"=>$usuario->getNombre1(),
                                        "nombre2"=>$usuario->getNombre2(),
                                        "apellido1"=>$usuario->getApellido1(),
                                        "apellido2"=>$usuario->getApellido1(),
                                        "id_rol"=>$usuario->getId_rol(),
                                        
                                    );

        return print(json_encode($resultado));
      }
    }

  }
  $resultado = array("estado"=>"false");
  return print(json_encode($resultado));
