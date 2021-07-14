<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Clientes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('clientes')->order_by('id_clientes', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('clientes')
            ->where('id_clientes', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('id_clientes', $id);
            $this->db->update('clientes', $dados);
        }else{
            $this->db->insert('clientes', $dados);
        }
    }
    public function remover($id){
        $this->db->where('id_clientes', $id);
        $this->db->delete('clientes');
    }





    

}
