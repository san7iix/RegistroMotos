
$(document).ready(function() {
  $("#tabla_usuarios").DataTable();
  $(".autoB").on('click',function() {
    if(validarAutorizar()){

    }else{
      event.preventDefault();
    }

  });
});


function validarAutorizar() {
  var tiempo = new Date();
  hora = tiempo.getHours();
  if(hora>=7 && hora<=8){
    alert("No puedes autorizar aún");
    return false;
  }else{
    return true;
  }
}

function enviarMail(correo,codigo) {
  $.ajax({
    url: 'correo.php',
    type: 'POST',
    data: {correo : correo,
          codigo  : codigo}
  })
  .done(function() {
    alert("E-Mail enviado correctamente");
  })
  .fail(function() {
    $("body").overhang({
      type: "error",
      message: "No se pudo enviar el E-mail"
    });
  });
  return false;
}
