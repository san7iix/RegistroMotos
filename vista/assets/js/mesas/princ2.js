var a;
$(document).ready(function() {
  $("#tablaVotos").DataTable({
    searching:false,
    paging:false
  });
  recarga();
  setInterval(recarga, 1000);
  $("#tabla_usuarios tbody" ).on("click",'a', function(event) {
    event.preventDefault();
    a = $(this).attr('value');
  });
  setInterval(function(){revisarMesa(a)}, 1000);
});

function recarga(){
  $(".recargar").load('prueba2.php');
  $("#tabla_usuarios").DataTable();
}

function revisarMesa(idMesa) {
    $(".recargarV").load('prueba3.php?idMesa='+idMesa);
    $("#mesa").text("Mesa: "+idMesa);
    $("#totalvotos").load('totalVotosMesa.php?id_mesa='+idMesa);
}

function mevaleverga(objeto) {
  return objeto
}
