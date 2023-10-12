<?php
defined('BASEPATH') or exit('No direct script access allowed');

class relawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_relawan', 'relawan');
        $this->load->model('model_akun', 'akun');
        if ($this->session->userdata('login_admin') == false) {
            redirect(base_url("login"));
        }
    }

    public function list_relawan()
    {
        $data['data_relawan'] = $this->relawan->getAllRelawan();
        $this->load->view('back/admin/relawan/list_relawan', $data);
    }

    public function list_pengajuan_relawan()
    {
        $data['data_pengajuan'] = $this->relawan->getAllPengajuan();
        $this->load->view('back/admin/relawan/list_pengajuan', $data);
    }

    public function hapus_relawan()
    {
        $id_akun = $_GET['id_akun'];
        $this->akun->hapus_akun($id_akun);
        echo $this->session->set_flashdata('msg', 'Dihapus');
        redirect('admin/relawan/list_relawan');
    }

    public function detail_pengajuan()
    {
        $id_akun = $_GET['id_akun'];
        $data['pengajuan_relawan'] = $this->relawan->getPengajuanById($id_akun);
        $this->load->view('back/admin/relawan/detail_pengajuan', $data);
    }

    public function detail_relawan()
    {
        $id_akun = $_GET['id_akun'];
        $data['data_relawan'] = $this->relawan->getPengajuanById($id_akun);
        $this->load->view('back/admin/relawan/detail_relawan', $data);
    }

    public function acc_pengajuan()
    {
        $id_relawan = $_GET['id_relawan'];
        $this->relawan->accPengajuanRelawan($id_relawan);
        echo $this->session->set_flashdata('msg', 'Disetujui');
        redirect('admin/relawan/list_relawan');
    }
}