<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Servicos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('servicos')->order_by('servicos_id', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('servicos')
            ->where('servicos_id', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('servicos_id', $id);
            $this->db->update('servicos', $dados);
        }else{
            $this->db->insert('servicos', $dados);
        }
    }
    public function remover($id){
        $this->db->where('servicos_id', $id);
        $this->db->delete('servicos');
    }

}
