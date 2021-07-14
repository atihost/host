$(function() {
    $('#usuario_email').on('blur', function () {
        var email = $(this).val();
        $.post(base_url+'checa-email', {'email': email}, function (rs) {
            if(rs == 1){
                $('#email_error').html('<strong class="text-danger">E-mail já cadastrado!</strong>');
                $('#usuario_email').val('').focus();
            }else{
                $('#email_error').html('E-mail');
            }
        })
    });
});

$('#datatable').on('click', '.remove-usuario', function(){
    var id = $(this).data('id');
    if (id == usuario_id){
        $('#id-protected').html('Você não pode remover seu próprio usuário!');
        $('#btn-remover-registro').hide();
    }else{
        $('#id-protected').html('Você está prestes a remover um registro <br> Deseja prosseguir ?');
        $('#btn-remover-registro').show();
    }
    $('#btn-remover-registro').data('id', id);
});

$('#btn-remover-registro').on('click', function () {
    var id = $(this).data('id');
    $.post(base_url+'remover-usuario',{'id': id}, function (rs) {
        $('#btn_cancela_modal').trigger('click');
        if(rs == 1){
            $('#usuario_tr_'+id).fadeOut();
            $.notify('Usuário Removido com Sucesso!', "success");
        }
        if(rs == 0){
            $.notify('Você não pode remover seu próprio usuário!', "danger");
        }
    });
});