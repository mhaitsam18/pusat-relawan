<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelatihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_pelatihan', 'pelatihan');
        $this->load->helper('tanggal');
        if ($this->session->userdata('login_admin') == false) {
            redirect(base_url("login"));
        }
    }

    public function list_pelatihan()
    {
        $data['data_pelatihan'] = $this->pelatihan->getAllPelatihan();
        $this->load->view('back/admin/pelatihan/list_pelatihan', $data);
    }

    public function list_pengajuan_pelatihan()
    {
        $data['data_pengajuan'] = $this->pelatihan->getAllPengajuan();
        $this->load->view('back/admin/pelatihan/list_pengajuan', $data);
    }

    public function hapus_pelatihan()
    {
        $id_pelatihan = $_GET['id_pelatihan'];
        $this->pelatihan->hapusPelatihan($id_pelatihan);
        echo $this->session->set_flashdata('msg', 'Dihapus');
        redirect('admin/pelatihan/list_pelatihan');
    }

    public function detail_pelatihan()
    {
        $id_pelatihan = $_GET['id_pelatihan'];
        $data['detail_pelatihan'] = $this->pelatihan->getPelatihanById($id_pelatihan);
        $this->load->view('back/admin/pelatihan/detail_pelatihan', $data);
    }

    public function detail_pengajuan_pelatihan()
    {
        $id_pelatihan = $_GET['id_pelatihan'];
        $data['pengajuan_pelatihan'] = $this->pelatihan->getPelatihanById($id_pelatihan);
        $this->load->view('back/admin/pelatihan/detail_pengajuan', $data);
    }

    public function acc_pengajuan_pelatihan()
    {
        $id_pelatihan = $_GET['id_pelatihan'];
        $this->pelatihan->accPengajuanPelatihan($id_pelatihan);
        echo $this->session->set_flashdata('msg', 'Disetujui');
        redirect('admin/pelatihan/list_pelatihan');
    }

    public function tolak_pengajuan_pelatihan()
    {
        $id_pelatihan = $_GET['id_pelatihan'];
        $this->pelatihan->tolakPengajuanPelatihan($id_pelatihan);
        echo $this->session->set_flashdata('msg', 'Ditolak');
        redirect('admin/pelatihan/list_pelatihan');
    }

}