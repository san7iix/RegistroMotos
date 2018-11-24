$(document).on("ready",inicio);

$(function() {
    $( "#tabs" ).tabs();
  });

function inicio(){
  $("#form_voto").bind('submit',function() {
    var rb = $("input[type = 'radio']:checked");
    if(rb.length < 4){
      $("body").overhang({
        type: "error",
        message: "Debe seleccionar 1 candidato por cada órgano",
      });
    }else{
      $.ajax({
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(response){
          if(response=="true"){
            $("body").overhang({
              type: "success",
              message: "Votos registrados correctamente",
              callback: function(){
                window.location.href = "../VotoE.php";
              }
            });
          }else{
            $("body").overhang({
              type: "error",
              message: "Error al registrar votos"
            });
          }
        }
      });
    }
    return false;
  });
}
