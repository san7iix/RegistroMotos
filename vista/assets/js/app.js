$(document).ready(function() {
  $("#formLogin").bind("submit",function(){
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success:function(response){
          if(response.estado=="true"){
            $("body").overhang({
              type: "success",
              message: "Logueado, redirigiendo...",
              callback: function(){
                window.location.href = "admin.php";
              }
            });
          }else{
            $("body").overhang({
              type: "error",
              message: "Usuario o contraseña incorrectos"
            });
          }
      },
      error: function (){
        $("body").overhang({
          type: "error",
          message: "Error al conectar"
        });
      }
    });
  return false;
  });
});
