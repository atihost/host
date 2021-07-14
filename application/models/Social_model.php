<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 21/11/2017
 * Time: 23:51
 */

class Social_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('social');
        return $this->db->get()->row_array();
    }

    public function gravar($dados){
        $this->db->set($dados);
        return $this->db->update('social', $dados);
    }

}