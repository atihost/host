<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Sobre extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Sobre_model');
    }

    public function index(){
        $data = [
            'sobre' => $this->Sobre_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/sobre-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('admin/sobre-novo', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'sobre' => $this->Sobre_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/sobre-editar', $data);
    }

    public function gravar(){

        $image_path = 'img/sobre/';

        if($_FILES['sobre_img']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'sobre_img');
            $_POST['sobre_img'] = $image_path.$config_icon;
        }

        if(isset($_POST['sobre_descricao']) && !empty($_POST['sobre_descricao'])){
            $_POST['sobre_descricao'] = remove_spaces($_POST['sobre_descricao']);
        }

        if(isset($_POST['sobre_id'])){
            $id = $_POST['sobre_id'];
            $this->Sobre_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Sobre Alterado com Sucesso!');
        }else{
            $this->Sobre_model->gravar($_POST);
            $this->session->set_flashdata('true', 'Sobre Adicionado com Sucesso!');
        }
        redirect('sobre/');
    }

    public function remover(){
        $id = $_POST['id'];
        $this->Sobre_model->remover($id);
        echo true;
    }

}