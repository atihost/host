(function($) {
  AddTableRow = function() {


    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><input type="text" name="cod[]" id="cod" autocomplete="off"></td>';
    cols += '<td><input type="text" name="desc[]" id="desc" autocomplete="off"></td>';
   
    cols += '<td><input type="text" name="qtde[]" autocomplete="off"></td>';
    
    cols += '<td><input type="text" name="valor[]" id="valor" autocomplete="off"></td>';
    
    cols += '<td>';
    cols += '<button onclick="AddTableRow()" type="button" class="btn btn-success">Adicionar</button>';
    cols += '</td>';

    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };
})(jQuery);