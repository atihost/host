<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Unidades_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('unidades')->order_by('unidade_id', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('unidades')
            ->where('unidade_id', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('unidade_id', $id);
            $this->db->update('unidades', $dados);
        }else{
            $this->db->insert('unidades', $dados);
        }
    }
    public function delete_by_id($id)
    {
        $this->db->where('unidade_id', $id);
        $this->db->delete($this->table);
    }

}
