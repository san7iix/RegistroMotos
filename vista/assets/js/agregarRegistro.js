$(document).ready(function() {
  $("#ingreso").click(function(event) {
    fAjax();
    return false;
  });
  $("#salida").click(function(event) {
    fAjax2();
    return false;
  });
});


function fAjax(){
  $.ajax({
    url: 'adminAdds/historial/agregarEntrada.php',
    type: 'POST',
    data: $("#formReporte").serialize(),
    success: function(data){
      if(data=="1"){
        $("body").overhang({
          type: "success",
          message: "Registrado correctamente.",
          callback: function(){
            window.location.href = "admin.php";
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

function fAjax2(){
  $.ajax({
    url: 'adminAdds/historial/agregarSalida.php',
    type: 'POST',
    data: $("#formReporte").serialize(),
    success: function(data){
      if(data=="1"){
        $("body").overhang({
          type: "success",
          message: "Registrado correctamente.",
          callback: function(){
            window.location.href = "admin.php";
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
