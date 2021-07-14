// titulo
$('#btn-grava-titulo').on('click', function () {
    var texto_titulo = $('#texto_titulo').val();
    $.post(url+'menu/gravar', {texto_titulo: texto_titulo}, function (rs) {
        $.notify(rs, "success");
    });
});
// subtitulo
$('#btn-grava-subtitulo').on('click', function () {
    var texto_subtitulo = $('#texto_subtitulo').val();
    $.post(url+'Menu/gravar', {texto_subtitulo: texto_subtitulo}, function (rs) {
        $.notify(rs, "success");
    });
});
// btn topo
$('#btn-grava-botao-topo').on('click', function () {
    var texto_botao_topo = $('#texto_botao_topo').val();
    $.post(url+'Menu/gravar', {texto_botao_topo: texto_botao_topo}, function (rs) {
        $.notify(rs, "success");
    });
});
// Serviços
$('#btn-grava-servico').on('click', function () {
    var texto_servico = $('#texto_servico').val();
    $.post(url+'Menu/gravar', {texto_servico: texto_servico}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sub Serviços
$('#btn-grava-sub-servico').on('click', function () {
    var texto_sub_servico = $('#texto_sub_servico').val();
    $.post(url+'Menu/gravar', {texto_sub_servico: texto_sub_servico}, function (rs) {
        $.notify(rs, "success");
    });
});
// Crusos
$('#btn-grava-curso').on('click', function () {
    var texto_curso = $('#texto_curso').val();
    $.post(url+'Menu/gravar', {texto_curso: texto_curso}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sub Cursos
$('#btn-grava-sub-curso').on('click', function () {
    var texto_sub_curso = $('#texto_sub_curso').val();
    $.post(url+'Menu/gravar', {texto_sub_curso: texto_sub_curso}, function (rs) {
        $.notify(rs, "success");
    });
});
// Portifolio
$('#btn-grava-portifolio').on('click', function () {
    var texto_portifolio = $('#texto_portifolio').val();
    $.post(url+'Menu/gravar', {texto_portifolio: texto_portifolio}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sub Portifolio
$('#btn-grava-sub-portifolio').on('click', function () {
    var texto_sub_portifolio = $('#texto_sub_portifolio').val();
    $.post(url+'Menu/gravar', {texto_sub_portifolio: texto_sub_portifolio}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sobre
$('#btn-grava-sobre').on('click', function () {
    var texto_sobre = $('#texto_sobre').val();
    $.post(url+'Menu/gravar', {texto_sobre: texto_sobre}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sub Sobre
$('#btn-grava-sub-sobre').on('click', function () {
    var texto_sub_sobre = $('#texto_sub_sobre').val();
    $.post(url+'Menu/gravar', {texto_sub_sobre: texto_sub_sobre}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sobre Final
$('#btn-grava-sobre-final').on('click', function () {
    var texto_sobre_final = $('#texto_sobre_final').val();
    $.post(url+'Menu/gravar', {texto_sobre_final: texto_sobre_final}, function (rs) {
        $.notify(rs, "success");
    });
});
// Equipe
$('#btn-grava-equipe').on('click', function () {
    var texto_equipe = $('#texto_equipe').val();
    $.post(url+'Menu/gravar', {texto_equipe: texto_equipe}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sub Equipe
$('#btn-grava-sub-equipe').on('click', function () {
    var texto_sub_equipe = $('#texto_sub_equipe').val();
    $.post(url+'Menu/gravar', {texto_sub_equipe: texto_sub_equipe}, function (rs) {
        $.notify(rs, "success");
    });
});
// desc Equipe
$('#btn-grava-equipe-final').on('click', function () {
    var texto_equipe_final = $('#texto_equipe_final').val();
    $.post(url+'Menu/gravar', {texto_equipe_final: texto_equipe_final}, function (rs) {
        $.notify(rs, "success");
    });
});
// Contato
$('#btn-grava-contato').on('click', function () {
    var texto_contato = $('#texto_contato').val();
    $.post(url+'Menu/gravar', {texto_contato: texto_contato}, function (rs) {
        $.notify(rs, "success");
    });
});
// Sub Contato
$('#btn-grava-sub-contato').on('click', function () {
    var texto_sub_contato = $('#texto_sub_contato').val();
    $.post(url+'Menu/gravar', {texto_sub_contato: texto_sub_contato}, function (rs) {
        $.notify(rs, "success");
    });
});
// BTN Contato
$('#btn-grava-btn-contato').on('click', function () {
    var texto_botao_mensagem = $('#texto_botao_mensagem').val();
    $.post(url+'Menu/gravar', {texto_botao_mensagem: texto_botao_mensagem}, function (rs) {
        $.notify(rs, "success");
    });
});
