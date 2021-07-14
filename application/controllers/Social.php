<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 21/11/2017
 * Time: 23:13
 */

class Social extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Social_model');
    }

    public function index(){
        $data = [
            'config' => $this->Config_model->get_all(),
            'social' => $this->Social_model->get_all(),
        ];
        $this->load->view('admin/social.php', $data);
    }

    public function gravar(){
        if($this->Social_model->gravar($_POST)){
            $this->session->set_flashdata('mensagem', 'true');
        }else{
            $this->session->set_flashdata('mensagem', 'false');
        }
        redirect('social');
    }
}