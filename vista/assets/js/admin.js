$(document).ready(function() {
  $("#tabla_usuarios").DataTable();
  $("#ingreso").click(function(event) {
    fAjax();
    return false;
  });
  /*$("#salida").click(function(event) {
    fAjax();
    return false;
  });*/
});


function fAjax(){
  $.ajax({
    url: 'adminAdds/historial/agregarEntrada.php',
    type: 'POST',
    data: $("#formReporte").serialize(),
    success: function(data){
      console.log(data);
      if(data=="1"){
        $("body").overhang({
          type: "success",
          message: "Registrado correctamente, redirigiendo...",
          callback: function(){
            window.location.href = "../admin.php";
          }
        });
      }else{
        $("body").overhang({
          type: "error",
          message: data
        });
      }
    }
  });
}
