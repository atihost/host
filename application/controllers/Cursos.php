<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Cursos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Cursos_model');
    }

    public function index(){
        $data = [
            'cursos' => $this->Cursos_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/cursos', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/novo-curso', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'cursos' => $this->Cursos_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/editar-curso', $data);
    }

    public function gravar(){
        if(isset($_POST['id_curso'])){
            $id = $_POST['id_curso'];
            $this->Cursos_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Curso Alterado com Sucesso!');
        }else{
            $this->Cursos_model->gravar($_POST);
            $this->session->set_flashdata('true', 'Curso Adicionado com Sucesso!');
        }
        redirect('gerencial/cursos/');
    }

    public function remover(){
        $id = $_POST['id'];
        $this->Cursos_model->remover($id);
        echo true;
    }

}
