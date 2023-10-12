<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_pelatihan extends CI_Model
{

    public function get_list_pelatihan($id_forum)
    {
        $status_array = array(1, 2);
        $this->db->from('pelatihan_relawan a');
        $this->db->join('relawan b', 'a.id_relawan = b.id_relawan');
        $this->db->join('pelatihan c', 'a.id_pelatihan = c.id_pelatihan');
        $this->db->join('akun d', 'b.id_akun = d.id_akun');
        $this->db->where_in('a.status_pengajuan_pelatihan', $status_array);
        $this->db->where('c.id_forum', $id_forum);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllPelatihanPublished()
    {
        $this->db->from('pelatihan a');
        $this->db->join('kategori_pelatihan b', 'a.id_kategori_pelatihan = b.id_kategori_pelatihan');
        $this->db->join('jenis_pelatihan c', 'a.id_jenis_pelatihan = c.id_jenis_pelatihan');
        $this->db->where_in('a.status_pengajuan_pelatihan', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllPelatihan()
    {
        $status_array = array(1, 2);
        $this->db->from('pelatihan a');
        $this->db->join('kategori_pelatihan b', 'a.id_kategori_pelatihan = b.id_kategori_pelatihan');
        $this->db->join('jenis_pelatihan c', 'a.id_jenis_pelatihan = c.id_jenis_pelatihan');
        $this->db->where_in('a.status_pengajuan_pelatihan', $status_array);
        $query = $this->db->get();
        return $query->result();
    }

    public function getPelatihanById($id_pelatihan)
    {
        $this->db->from('pelatihan a');
        $this->db->join('kategori_pelatihan b', 'a.id_kategori_pelatihan = b.id_kategori_pelatihan');
        $this->db->join('jenis_pelatihan c', 'a.id_jenis_pelatihan = c.id_jenis_pelatihan');
        $this->db->where('id_pelatihan', $id_pelatihan);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllPengajuan()
    {
        $this->db->from('pelatihan a');
        $this->db->join('kategori_pelatihan b', 'a.id_kategori_pelatihan = b.id_kategori_pelatihan');
        $this->db->join('jenis_pelatihan c', 'a.id_jenis_pelatihan = c.id_jenis_pelatihan');
        $this->db->where('status_pengajuan_pelatihan', 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function inputPelatihan($data)
    {
        $this->db->insert('pelatihan', $data);
    }

    public function editPelatihan($data)
    {
        $this->db->set('nama_pelatihan', $data['nama_pelatihan']);
        $this->db->set('id_kategori_pelatihan', $data['id_kategori_pelatihan']);
        $this->db->set('id_jenis_pelatihan', $data['id_jenis_pelatihan']);
        $this->db->set('tanggal_pelatihan', $data['tanggal_pelatihan']);
        $this->db->set('deskripsi_pelatihan', $data['deskripsi_pelatihan']);
        $this->db->set('waktu', $data['waktu']);
        $this->db->set('kuota', $data['kuota']);
        $this->db->where('id_pelatihan', $$data['id_pelatihan']);
        $this->db->update('pelatihan');
    }

    public function getAllJenisPelatihan()
    {
        $this->db->from('jenis_pelatihan');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllKategoriPelatihan()
    {
        $this->db->from('kategori_pelatihan');
        $query = $this->db->get();
        return $query->result();
    }

    public function hapusPelatihan($id_pelatihan)
    {
        $this->db->where('id_pelatihan', $id_pelatihan);
        $this->db->delete('pelatihan');
    }

    public function accPengajuanPelatihan($id_pelatihan)
    {
        $this->db->set('status_pengajuan_pelatihan', 1);
        $this->db->where('id_pelatihan', $id_pelatihan);
        $this->db->update('pelatihan');
    }

    public function tolakPengajuanPelatihan($id_pelatihan)
    {
        $this->db->set('status_pengajuan_pelatihan', 2);
        $this->db->where('id_pelatihan', $id_pelatihan);
        $this->db->update('pelatihan');
    }

    public function getDetailPengajuanPelatihanById($id_relawan)
    {
        $this->db->from('pelatihan_relawan a');
        $this->db->join('relawan b', 'a.id_relawan = b.id_relawan');
        $this->db->join('pelatihan c', 'a.id_pelatihan = c.id_pelatihan');
        $this->db->join('akun d', 'b.id_akun = d.id_akun');
        $this->db->where('a.id_relawan', $id_relawan);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllPengajuanPelatihanByForumId($id_forum)
    {
        $this->db->from('pelatihan_relawan a');
        $this->db->join('relawan b', 'a.id_relawan = b.id_relawan');
        $this->db->join('pelatihan c', 'a.id_pelatihan = c.id_pelatihan');
        $this->db->join('akun d', 'b.id_akun = d.id_akun');
        $this->db->where('a.status_pengajuan_pelatihan', 0);
        $this->db->where('c.id_forum', $id_forum);
        $query = $this->db->get();
        return $query->result();
    }

    public function accPengajuanPelatihanRelawan($where)
    {
        $this->db->set('status_pengajuan_pelatihan', 1);
        $this->db->where($where);
        $this->db->update('pelatihan_relawan'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }

    public function tolakPengajuanPelatihanRelawan($where)
    {
        $this->db->set('status_pengajuan_pelatihan', 2);
        $this->db->where($where);
        $this->db->update('pelatihan_relawan'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }

    public function hapusRelawan($id_relawan)
    {
        $this->db->where('id_relawan', $id_relawan);
        $this->db->delete('forum_relawan');
    }

    //FOR RELAWAN
    public function inputPengajuanPelatihan($data)
    {
        $this->db->insert('pelatihan_relawan', $data);
    }

    public function getRelawanById($id_relawan)
    {
        $this->db->from('pelatihan_relawan a');
        $this->db->join('relawan b', 'a.id_relawan = b.id_relawan');
        $this->db->join('pelatihan c', 'a.id_pelatihan = c.id_pelatihan');
        $this->db->join('akun d', 'b.id_akun = d.id_akun');
        $this->db->where('a.id_relawan', $id_relawan);
        $query = $this->db->get();
        return $query->result();
    }
}