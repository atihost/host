<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Portifolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Portifolio_model');
    }

    public function index(){
        $data = [
            'portifolio' => $this->Portifolio_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/portifolio-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('admin/portifolio-novo', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'portifolio' => $this->Portifolio_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/portifolio-editar', $data);
    }

    public function gravar(){

        $image_path = 'img/portifolio/';

        if($_FILES['portifolio_img']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'portifolio_img');
            $_POST['portifolio_img'] = $image_path.$config_icon;
        }
        if($_FILES['portifolio_img_full']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'portifolio_img_full');
            $_POST['portifolio_img_full'] = $image_path.$config_icon;
        }
        if(isset($_POST['portifolio_descricao']) && !empty($_POST['portifolio_descricao'])){
            $_POST['portifolio_descricao'] = remove_spaces($_POST['portifolio_descricao']);
        }

        if(isset($_POST['portifolio_id'])){
            $id = $_POST['portifolio_id'];
            $this->Portifolio_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Item Alterado com Sucesso!');
        }else{
            $this->Portifolio_model->gravar($_POST);
            $this->session->set_flashdata('true', 'Item Adicionado com Sucesso!');
        }
        redirect('portifolio/');
    }

    public function get_portfolio(){
        $id = $_POST['portifolio_id'];
        $portifolio = (object)$this->Portifolio_model->get_by_id($id);
        echo json_encode($portifolio);
    }

    public function remover(){
        $id = $_POST['id'];
        $this->Portifolio_model->remover($id);
        echo true;
    }

}