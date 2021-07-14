<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Propostas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('propostas')->order_by('id_propostas', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('propostas')
            ->where('id_propostas', $id);
        return $this->db->get()->row_array();
    }



    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('id_propostas', $id);
            $this->db->update('propostas', $dados);
        }else{
            $this->db->insert('propostas', $dados);
        }
    }
    public function remover($id){
        $this->db->where('id_propostas', $id);
        $this->db->delete('propostas');
    }

}
