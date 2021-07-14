$(document).ready(function(){
    $("input[id='cod']").blur(function(){
      
      var $desc = $("input[id='desc']");
      var $valor = $("input[id='valor']");

        $.getJSON(
          '../includes/plugins/controle/consultaProcedimento.php',
          { cod: $( this ).val() },
          function( json )
          {
            
            $desc.val( json.desc );
           $valor.val( json.valor );
          }
        );
    });
  });