<?php

class Config_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('*')->from('config');
        return $this->db->get()->row_array();
    }

    public function gravar($dados)
    {
        $this->db->set($dados);
        return $this->db->update('config', $dados);
    }

    public function upload_files($files, $field_name, $id)
    {
        if($id == 0){
            $this->db->set("config_icon", $files);
            $this->db->insert_batch('config', $files);
        }else{
            $this->db->set("config_icon", $files);
            $this->db->where('config_id', $id);
            return $this->db->update_batch('config', $files);
        }
    }
}
