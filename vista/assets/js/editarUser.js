$(document).ready(function() {

  $("#form_editar_user").bind('submit', function() {
    $.ajax({
      url: $(this).attr("action"),
      type: $(this).attr("method"),
      data: $(this).serialize(),
      success: function(response){
        console.log(response);
        if(response=="true"){
          $("body").overhang({
            type: "success",
            message: "Editado correctamente, redirigiendo...",
            callback: function(){
              window.location.href = "usuarios.php";
            }
          });
        }else{
          $("body").overhang({
            type: "error",
            message: "Error al editar el usuario"
          });
        }
      }
    })
    return false;
  });

});
