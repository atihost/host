$('.portfolio-link').on('click', function () {
    var portifolio_id = $(this).data('id');
    $.post(url+'Portifolio/get_portfolio', {portifolio_id: portifolio_id}, function (portifolio) {
        portifolio = $.parseJSON(portifolio);
       $('#modal-portifolio-titulo').text(portifolio.portifolio_titulo);
       $('#modal-portifolio-subtitulo').text(portifolio.portifolio_subtitulo);
       $('#modal-portifolio-img-full').html('<img class="img-responsive img-centered" src='+ portifolio.portifolio_img_full +'>');
       if (portifolio.portifolio_descricao != null){
           $('#modal-portifolio-descricao').html(portifolio.portifolio_descricao);
       }
       if(portifolio.portifolio_link != null){
           $('#modal-portifolio-link').html('<br><br><a class="text-center btn btn-primary" target="_blank" href="'+ portifolio.portifolio_link +'"><i class="fa fa-search"></i> VISUALIZAR</a>');
       }
    });
});