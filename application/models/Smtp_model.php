<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 22/11/2017
 * Time: 01:40
 */

class Smtp_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('smtp');
        return $this->db->get()->row_array();
    }

    public function gravar($dados){
        $this->db->set($dados);
        return $this->db->update('smtp', $dados);
    }
}