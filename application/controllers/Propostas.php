<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Propostas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Propostas_model', 'proposta_m');
    }

    public function index(){
        
        $data = [
            'propostas' => $this->proposta_m->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        
        $this->load->view('gerencial/propostas-lista', $data);
        
    }



    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/categoria-novo', $data);
    }

    public function editar(){
        $id = get_param(3);
        $data = [
            'propostas' => $this->proposta_m->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ]; 

      
        $this->load->view('gerencial/editar-proposta', $data);
    }

    public function gravar(){


        if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
            $_POST['descricao'] = remove_spaces($_POST['descricao']);
        }

        if(isset($_POST['id_categoria'])){
            $id = $_POST['id_categoria'];
            $this->categoria_m->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Categoria Alterado com Sucesso!');
        }else{
            $this->categoria_m->gravar($_POST);
            $this->session->set_flashdata('true', 'Categoria Adicionado com Sucesso!');
        }
        redirect('gerencial/configuracoes/categorias/');
    }

    public function remover(){
        $id = $_POST['id_categorias'];
        $this->categoria_m->remover($id);
        echo true;
    }



}
