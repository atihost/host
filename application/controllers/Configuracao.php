<?php

class Configuracao extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
    }

    public function cabecalho()
    {
        $data = [
            'config' => $this->Config_model->get_all(),
        ];
        $this->load->view('admin/cabecalho', $data);
    }

    public function seo(){
        $data = [
            'config' => $this->Config_model->get_all(),
        ];
        $this->load->view('admin/seo', $data);
    }

    public function contato(){
        $data = [
            'config' => $this->Config_model->get_all(),
        ];
        $this->load->view('admin/contato', $data);
    }

     




    public function gravar()
    {
        $image_path = 'img/public/';

        if($_FILES['config_icon']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'config_icon');
            $_POST['config_icon'] = $image_path.$config_icon;
        }
        if($_FILES['config_og_image']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'config_og_image');
            $_POST['config_og_image'] = $image_path.$config_icon;
        }

        if($_FILES['config_rodape_img']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'config_rodape_img');
            $_POST['config_rodape_img'] = $image_path.$config_icon;
        }

        if(isset($_POST['config_keywords']) && !empty($_POST['config_keywords'])){
            $_POST['config_keywords'] = remove_spaces($_POST['config_keywords']);
        }
        if(isset($_POST['config_ga']) && !empty($_POST['config_ga'])){
            $_POST['config_ga'] = remove_spaces($_POST['config_ga']);
        }

        if($this->Config_model->gravar($_POST)){
            $this->session->set_flashdata('mensagem', 'true');
        }else{
            $this->session->set_flashdata('mensagem', 'false');
        }
        if(isset($_POST['config_keywords'])){
            redirect('cabecalho');
        }
        if(isset($_POST['config_ga'])){
            redirect('seo');
        }
    }

    public function gravar_contato(){
        if($this->Config_model->gravar($_POST)){
            $this->session->set_flashdata('mensagem', 'true');
        }else{
            $this->session->set_flashdata('mensagem', 'false');
        }
        redirect('contato');
    }

}
