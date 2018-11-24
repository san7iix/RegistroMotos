$(document).ready(function() {
  $("#buscar").bind('submit',function(){
    $.ajax({
      url: $(this).attr("action"),
      type: $(this).attr("method"),
      data: $(this).serialize(),
      dataType: 'json',
      success: function(response){
        var nombre = response[0].nombre1+" "+response[0].nombre2+" "+response[0].apellido1+" "+response[0].apellido2;
        var mesa = response[0].nombreMesa;
        var lugar = response[0].nombreLugar;
        $("#nombreB").html("Nombre: "+nombre);
        $("#lugarB").html("Lugar: "+lugar);
        $("#mesaB").html("Mesa: "+mesa);
      }
    });
    return false;
  });
});
