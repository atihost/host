<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Cursos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('cursos')->order_by('id_curso', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('cursos')
            ->where('id_curso', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('id_curso', $id);
            $this->db->update('cursos', $dados);
        }else{
            $this->db->insert('cursos', $dados);
        }
    }
    public function remover($id){
        $this->db->where('id_curso', $id);
        $this->db->delete('cursos');
    }

}
