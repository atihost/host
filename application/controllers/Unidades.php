<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Unidades extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Configuracoes/Unidades_model', 'unidades_m');
    }

    public function index(){
        $data = [
            'unidades' => $this->unidades_m->get_all(),
            'config' => $this->Config_model->get_all()
        ];

$query = $this->db->get_where('unidades', array('unidade_id' => $id), $limit, $offset);

        $this->load->view('gerencial/configuracoes/unidade-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/unidade-novo', $data);
    }

    public function editar(){
        $id = get_param(3);
        $data = [
            'unidades' => $this->unidades_m->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/editar-unidade', $data);
    }

    public function gravar(){

       

        if(isset($_POST['nomeCompleto']) && !empty($_POST['nomeCompleto'])){
            $_POST['nomeCompleto'] = remove_spaces($_POST['nomeCompleto']);
        }

        if(isset($_POST['unidade_id'])){
            $id = $_POST['unidade_id'];
            $this->unidades_m->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'cliente Alterado com Sucesso!');
        }else{
            $this->unidades_m->gravar($_POST);
            $this->session->set_flashdata('true', 'cliente Adicionado com Sucesso!');
        }
        redirect('gerencial/configuracoes/unidades/');
    }

     public function ajax_delete($id)
    {
        $this->person->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

}
