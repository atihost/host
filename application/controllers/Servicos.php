<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Servicos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Servicos_model');
    }

    public function index(){
        $data = [
            'servicos' => $this->Servicos_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/servicos-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('admin/servicos-novo', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'servicos' => $this->Servicos_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/servicos-editar', $data);
    }

    public function gravar(){
        if(isset($_POST['servicos_id'])){
            $id = $_POST['servicos_id'];
            $this->Servicos_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Serviço Alterado com Sucesso!');
        }else{
            $this->Servicos_model->gravar($_POST);
            $this->session->set_flashdata('true', 'Serviço Adicionado com Sucesso!');
        }
        redirect('servicos/');
    }

    public function remover(){
        $id = $_POST['id'];
        $this->Servicos_model->remover($id);
        echo true;
    }

}