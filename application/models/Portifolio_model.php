<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Portifolio_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('portifolio')->order_by('portifolio_id', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('portifolio')
            ->where('portifolio_id', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('portifolio_id', $id);
            $this->db->update('portifolio', $dados);
        }else{
            $this->db->insert('portifolio', $dados);
        }
    }
    public function remover($id){
        $this->db->where('portifolio_id', $id);
        $this->db->delete('portifolio');
    }

}