<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_akun extends CI_Model
{

    public function cek_autentikasi($email, $passwordMD5)
    {
        $this->db->from('akun');
        $this->db->where('email', $email);
        $this->db->where('password', $passwordMD5);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_forum($id_akun)
    {
        $this->db->from('akun a');
        $this->db->join('forum f', 'a.id_akun = f.id_akun');
        $this->db->where('a.id_akun', $id_akun);
        $this->db->where('status_pengajuan', 1);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_admin($id_akun)
    {
        $this->db->from('akun a');
        $this->db->join('admin f', 'a.id_akun = f.id_akun');
        $this->db->where('a.id_akun', $id_akun);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_relawan($id_akun)
    {
        $this->db->from('akun a');
        $this->db->join('relawan f', 'a.id_akun = f.id_akun');
        $this->db->where('a.id_akun', $id_akun);
        $this->db->where('status_pengajuan', 1);

        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_akun($id_akun)
    {
        $this->db->where('id_akun', $id_akun);
        $this->db->delete('akun');
    }
}