<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {

    public function getAllAdmin(){
        $this->db->from('akun a');
        $this->db->join('admin f', 'a.id_akun = f.id_akun');
   
        $query = $this->db->get();
        return $query->result();
    }

    public function input_admin($data)
    {
       $this->db->insert('admin', $data);
    }

}

