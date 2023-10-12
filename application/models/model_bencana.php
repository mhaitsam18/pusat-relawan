<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_bencana extends CI_Model
{

    public function getAllBencana()
    {

        $this->db->from('bencana a');
        $this->db->join('kategori_bencana b', 'a.id_kategori_bencana = b.id_kategori_bencana');
        $this->db->where_in('a.status_pengajuan', [1, 2]);

        $query = $this->db->get();
        return $query->result();
    }

    public function getAllPengajuan()
    {
        $this->db->from('bencana a');
        $this->db->join('kategori_bencana b', 'a.id_kategori_bencana = b.id_kategori_bencana');
        $this->db->where('a.status_pengajuan', 0);

        $query = $this->db->get();
        return $query->result();
    }

    public function getAllBencanaPublish()
    {
        $this->db->from('bencana a');
        $this->db->join('kategori_bencana b', 'a.id_kategori_bencana = b.id_kategori_bencana');
        $this->db->where('a.status_pengajuan', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllBencanaByForumId($id_forum)
    {
        $this->db->from('bencana a');
        $this->db->join('kategori_bencana b', 'a.id_kategori_bencana = b.id_kategori_bencana');
        $this->db->where('a.id_forum', $id_forum);
        $query = $this->db->get();
        return $query->result();
    }

    public function getBencanaById($id_bencana)
    {
        $this->db->from('bencana a');
        $this->db->join('kategori_bencana b', 'a.id_kategori_bencana = b.id_kategori_bencana');
        $this->db->where('a.id_bencana', $id_bencana);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllKategoriBencana()
    {
        $this->db->from('kategori_bencana');
        $query = $this->db->get();
        return $query->result();
    }

    public function input_bencana($data)
    {
        $this->db->insert('bencana', $data);
    }

    public function hapus_bencana($id_bencana)
    {
        $this->db->where('id_bencana', $id_bencana);
        $this->db->delete('bencana');
    }

    public function count_relawan_gabung($id_bencana)
    {
        $this->db->from('forum_relawan fr');
        $this->db->join('bencana b', 'id_forum');
        $this->db->where('fr.status_pengajuan_relawan', 1);
        $this->db->where('b.id_bencana', $id_bencana);
        return $this->db->count_all_results();
    }
}