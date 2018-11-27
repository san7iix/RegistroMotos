$(document).ready(function() {
  $("#enviar").click(function(event) {
    fAjax();
    return false;
  });
});


function fAjax(){
  $.ajax({
    url: 'agregarMotoI.php',
    type: 'POST',
    data: $("#formLogin").serialize(),
    success: function(data){
      console.log(data);
      if(data=="1"){
        $("body").overhang({
          type: "success",
          message: "Registrado correctamente, redirigiendo...",
          callback: function(){
            window.location.href = "../usuario/usuario.php";
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
