$(document).ready(function() {
        var max_fields          = 10;   //max de 15 inscricoes de cada vez
        var x = 1;
        $('#add_field').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
                if (x < max_fields) {
                        $('#listas').append('\
                                        <tr class="remove' + x + '"><td><input type="text" name="nome[]" id="nome"></td>\
                                        <td><input type="text" name="dta_nasc[]" id="dta_nasc" placeholder="yyyy-mm-dd"></td>\
                                        <td>\
                                                Sim&nbsp;<input type="radio" value="1" name="cool['+ x +']" id="cool">&nbsp;\
                                                N&atilde;o&nbsp;<input type="radio" value="0" name="cool['+ x +']" id="cool" checked>&nbsp;\
                                        </td>\
                                        <td><a href="#" class="remove_campo" id="remove' + x +'">X</a></td>\
                        ');
                        x++;
                }
        });

        //this is not the best move, because will create overhead...
        //but is for simplicity
        //damn users
        $('#listas').on("click",".remove_campo",function(e) {
                e.preventDefault();
                var tr = $(this).attr('id');
                //alert ('remove: ' + tr);
                $('#listas tr.'+ tr).remove();
                x--;
        });

});