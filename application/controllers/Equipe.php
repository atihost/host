<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Equipe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Equipe_model');
    }

    public function index(){
        $data = [
            'equipe' => $this->Equipe_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/equipe-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('admin/equipe-novo', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'equipe' => $this->Equipe_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/equipe-editar', $data);
    }

    public function gravar(){

        $image_path = 'img/equipe/';

        if($_FILES['equipe_img']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'equipe_img');
            $_POST['equipe_img'] = $image_path.$config_icon;
        }

        if(isset($_POST['equipe_descricao']) && !empty($_POST['equipe_descricao'])){
            $_POST['equipe_descricao'] = remove_spaces($_POST['equipe_descricao']);
        }

        if(isset($_POST['equipe_id'])){
            $id = $_POST['equipe_id'];
            $this->Equipe_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Equipe Alterado com Sucesso!');
        }else{
            $this->Equipe_model->gravar($_POST);
            $this->session->set_flashdata('true', 'Equipe Adicionado com Sucesso!');
        }
        redirect('equipe/');
    }

    public function remover(){
        $id = $_POST['id'];
        $this->Equipe_model->remover($id);
        echo true;
    }

}