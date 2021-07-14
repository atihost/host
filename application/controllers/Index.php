<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 26/09/2017
 * Time: 21:30
 */

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Social_model');
        $this->load->model('Servicos_model');
        $this->load->model('Cursos_model');
        $this->load->model('Menus_model');
        $this->load->model('Portifolio_model');
        $this->load->model('Sobre_model');
        $this->load->model('Equipe_model');
         $this->load->model('Configuracoes/Clientes_model', 'clientes_m');
    }

    public function index(){
        $data = [
            'config' => $this->Config_model->get_all(),
            'social' => $this->Social_model->get_all(),
            'servicos' => $this->Servicos_model->get_all(),
            'cursos' => $this->Cursos_model->get_all(),
            'menus' => $this->Menus_model->get_all(),
            'portifolio' => $this->Portifolio_model->get_all(),
            'sobre' => $this->Sobre_model->get_all(),
            'equipe' => $this->Equipe_model->get_all(),
            'clientes' => $this->clientes_m->get_all(),
        ];
        $this->load->view('site/index', $data);
    }
}
