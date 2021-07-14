<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Clientes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();


        $this->load->model('Configuracoes/Clientes_model', 'clientes_m');
        
    }

 

    public function index(){
        $data = [
            'clientes' => $this->clientes_m->get_all(),
            'config' => $this->Config_model->get_all()
        ];
         
    
      
         $query = $this->db->get_where('clientes', array('id_clientes' => $id), $limit, $offset);



        $this->load->view('gerencial/configuracoes/cliente-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->clientes_m->get_all()
        ];
        $this->load->view('gerencial/configuracoes/cliente-novo', $data);
    }

    public function editar(){
        $id = get_param(3);
        $data = [
            'clientes' => $this->clientes_m->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/editar-cliente', $data);
    }

    public function gravar(){

        $image_path = 'img/cliente/';

        if($_FILES['cliente_img']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'cliente_img');
            $_POST['cliente_img'] = $image_path.$config_icon;
        }

        if(isset($_POST['nomeCompleto']) && !empty($_POST['nomeCompleto'])){
            $_POST['nomeCompleto'] = remove_spaces($_POST['nomeCompleto']);
        }

        if(isset($_POST['id_clientes'])){
            $id = $_POST['id_clientes'];
            $this->clientes_m->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'cliente Alterado com Sucesso!');
        }else{
            $this->clientes_m->gravar($_POST);
            $this->session->set_flashdata('true', 'cliente Adicionado com Sucesso!');
        }
        redirect('gerencial/configuracoes/clientes/');
    }

    public function remover(){
        $id = $_POST['id'];
        $this->clientes_m->remover($id);
        echo true;
    }


   





}
