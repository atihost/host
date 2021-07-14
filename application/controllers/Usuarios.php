<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Configuracoes/Usuarios_model', 'usuario_m');
        
    }

    public function index(){
        $data = [
            
            'usuarios' => $this->usuario_m->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/usuarios-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/usuarios-novo', $data);
    }

    public function editar(){
        $id = get_param(3);
        $data = [
            'usuario' => $this->usuario_m->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/configuracoes/usuarios-editar', $data);
    }

    public function gravar(){
        if(isset($_POST['usuario_senha']) && !empty($_POST['usuario_senha'])){
            $_POST['usuario_senha'] = md5($_POST['usuario_senha']);
        }
        if(empty($_POST['usuario_senha'])){
            unset ($_POST['usuario_senha']);
        }
        if(isset($_POST['usuario_id'])){
            $id = $_POST['usuario_id'];
            $this->usuario_m->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Usuário Alterado com Sucesso!');
        }else{
            $this->usuario_m->gravar($_POST);
            $this->session->set_flashdata('true', 'Usuário Adicionado com Sucesso!');
        }
        redirect('usuarios');
    }

    public function remover(){
        $id = $_POST['id'];
        if($id != $_SESSION['__USUARIO_LOGADO__']['usuario_id']){
            $this->usuario_m->remover($id);
            echo true;
        }else{
            echo false;
        }
    }

    public function checa_email(){
        $email = $_POST['email'];
        echo $this->usuario_m->checa_email($email);
    }
}
