$(document).ready(function() {
  $("#enviar").click(function(event) {
    fAjax();
    return false;
  });
});


function fAjax(){
  $.ajax({
    url: 'registro.php',
    type: 'POST',
    data: $("#formLogin").serialize(),
    success: function(data){
      if(data=="1"){
        $("body").overhang({
          type: "success",
          message: "Registrado correctamente, redirigiendo...",
          callback: function(){
            window.location.href = "../index.php";
          }
        });
      }else{
        $("body").overhang({
          type: "error",
          message: "El código que ingresó ya existe."        
        });
      }
    }
  });
}
