<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($email, $senha){
        $this->db->select('o.usuario_id,
                                o.perfil,
                                p.perfil_id as perfil'
                                )
            ->from('usuarios o')
            ->join('perfil_de_usuarios p', 'p.perfil_id = o.perfil')             
            
            
            ->where('o.usuario_email' , $email)
            ->where('o.usuario_senha' , $senha)
           
            ->where('o.ativo = true')
            ->where('p.ativo = true');
        return $this->db->get()->row_array();
    }

    public function get_all(){
        
        $this->db->select('*')->from('usuarios')->order_by("usuario_id", "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('usuarios')
            ->where('usuario_id', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('usuario_id', $id);
            $this->db->update('usuarios', $dados);
        }else{
            $this->db->insert('usuarios', $dados);
        }
    }
    public function remover($id){
        $this->db->where('usuario_id', $id);
        $this->db->delete('usuarios');
    }

    public function checa_email($email){
        $this->db->select('*')
        ->from('usuarios')
        ->where('usuario_email', $email);
        return $this->db->get()->row_array() != '' ? true : false;
    }

   
}
