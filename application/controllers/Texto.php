<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Menus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Menus_model');
    }

    public function index(){
        $data = [
            'menus' => $this->Menus_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/menus-lista', $data);
    }

    public function gravar(){
        $id = 1;
        $this->Menus_model->gravar($_POST, $id);
        echo 'Menu Alterado com Sucesso!';
    }

}
