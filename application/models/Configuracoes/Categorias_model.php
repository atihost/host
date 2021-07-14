<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Categorias_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('categorias')->order_by('id_categoria', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('categorias')
            ->where('id_categoria', $id);
        return $this->db->get()->row_array();
    }



    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('id_categoria', $id);
            $this->db->update('categorias', $dados);
        }else{
            $this->db->insert('categorias', $dados);
        }
    }
    public function remover($id){
        $this->db->where('id_categoria', $id);
        $this->db->delete('categorias');
    }

}
