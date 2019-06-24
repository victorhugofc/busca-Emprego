$(document).ready(function(){
    $("#formulariocad").submit(function(event) {

      $(".obrigatorio").each(function(){
        var valor = $(this).val();
        if (valor == "") {
          $(this).next("span").text("Campo Obrigatório");
          event.preventDefault();
        }
      });
    });
  });
