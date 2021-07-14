<?php

class AdminLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Configuracoes/Usuarios_model', 'usuario_m');
        
    }

    public function login(){
        $data = [
            
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('gerencial/login', $data);
    }

    public function conectar(){
        if(!isset($_SESSION['__USUARIO_LOGADO__'])){
            $email = $_POST['usuario_email'];
            $senha = md5($_POST['usuario_senha']);
            
            $login = $this->usuario_m->get($email, $senha);

            if(!empty($login)){
                $_SESSION['__USUARIO_LOGADO__'] = $login;
                redirect('gerencial/');
            }
            else{
                $this->session->set_flashdata('erro', true);
                redirect('login');
            }
        }
    }

    public function logout()
    {
        if(isset($_SESSION['__USUARIO_LOGADO__']) && $_SESSION['__USUARIO_LOGADO__'] != ''){
            unset($_SESSION['__USUARIO_LOGADO__']);
            redirect('gerencial/');
        }
        
    }

}
