<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 22/11/2017
 * Time: 01:29
 */

class Smtp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Smtp_model');
    }

    public function index(){
        $data = [
            'config' => $this->Config_model->get_all(),
            'smtp' => $this->Smtp_model->get_all(),
        ];
        $this->load->view('admin/smtp', $data);
    }

    public function gravar(){
        if($this->Smtp_model->gravar($_POST)){
            $this->session->set_flashdata('mensagem', 'true');
        }else{
            $this->session->set_flashdata('mensagem', 'false');
        }
        redirect('smtp');
    }
}