<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_relawan extends CI_Model
{

    public function input_relawan($data)
    {
        $this->db->insert('relawan', $data);
    }

    public function getAllRelawan()
    {
        // $this->db->from('forum_relawan a');
        $this->db->from('relawan b');
        // $this->db->join('forum c', 'a.id_forum = c.id_forum');
        $this->db->join('akun a', 'b.id_akun = a.id_akun');

        $query = $this->db->get();
        return $query->result();
    }

    public function getRelawanById($id_relawan)
    {
        $this->db->from('forum_relawan a');
        $this->db->join('relawan b', 'a.id_relawan = b.id_relawan');
        $this->db->join('forum c', 'a.id_forum = c.id_forum');
        $this->db->join('akun d', 'b.id_akun = d.id_akun');
        $this->db->where('a.id_relawan', $id_relawan);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllPengajuan()
    {
        $this->db->from('akun a');
        $this->db->join('relawan f', 'a.id_akun = f.id_akun');
        $this->db->where('status_pengajuan', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function getPengajuanById($id_akun)
    {
        $this->db->from('akun a');
        $this->db->join('relawan f', 'a.id_akun = f.id_akun');
        $this->db->where('a.id_akun', $id_akun);
        $query = $this->db->get();
        return $query->result();
    }

    public function accPengajuanRelawan($id_relawan)
    {
        $this->db->set('status_pengajuan', 1);
        $this->db->where('id_relawan', $id_relawan);
        $this->db->update('relawan'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }
}