<?php
  session_start();
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";

  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/controlador/UsuarioControlador.php";
  $codigo = $_POST['codigo'];
  $correo = $_POST['correo'];
  $usuario = UsuarioControlador::obtenerUsuario($codigo);
  $nombre = $usuario->getNombre1()." ".$usuario->getNombre2()." ".$usuario->getApellido1()." ".$usuario->getApellido2();
  $mesa = $usuario->getId_mesa();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require "$dir/PHPMailer/src/Exception.php";
  require "$dir/PHPMailer/src/PHPMailer.php";
  require "$dir/PHPMailer/src/SMTP.php";

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'enviarmaricadas@gmail.com';                 // SMTP username
    $mail->Password = 'mimondaca12';                           // SMTP password
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('enviarmaricadas@gmail.com', 'Auto generar certificado');
    $mail->addAddress($correo, "$nombre user");     // Add a recipient
    //$mail->addAttachment("$dir/src/enviar.jpg", 'momo.jpg');    // Optional name

    //Content

    $body = '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <body>
      <div style="background-color: rgb(237, 237, 237);color: black;border-radius:20px;padding:20px;max-width:350px">
        <h1 style="margin:auto">Certificado electoral</h1>
        <p class="lead">Codigo: '.$codigo.'</p>
        <p class="lead">Nombre: '.$nombre.'</p>
        <p class="lead">Mesa: '.$mesa.'</p>

        <hr class="m-y-md">
        <p>Elecciones Universidad del Magdalena 201X</p>
      </div>
    </body>';

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Certificado de votacion Unimagdalena';
    $mail->Body    = $body;

    $mail->send();
    echo 'El mensaje fué enviado';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>
