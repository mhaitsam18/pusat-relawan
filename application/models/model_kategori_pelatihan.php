<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_kategori_pelatihan extends CI_Model {

    public function getAllKategoriPelatihan(){
        $this->db->from('kategori_pelatihan');
   
        $query = $this->db->get();
        return $query->result();
    }

    public function inputKategoriPelatihan($data)
    {
       $this->db->insert('kategori_pelatihan', $data);
    }

    public function hapusKategoriPelatihan($id_kategori_pelatihan)
    {
        $this->db->where('id_kategori_pelatihan', $id_kategori_pelatihan);
        $this->db->delete('kategori_pelatihan');
    }

}

