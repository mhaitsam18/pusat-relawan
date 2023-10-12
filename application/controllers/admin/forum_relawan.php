<?php
defined('BASEPATH') or exit('No direct script access allowed');

class forum_relawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_forum_relawan', 'forum_relawan');
        $this->load->model('model_akun', 'akun');
        $this->load->helper('tanggal');
        if ($this->session->userdata('login_admin') == false) {
            redirect(base_url("login"));
        }
    }

    public function list_forum()
    {
        $data['data_pengajuan'] = $this->forum_relawan->getForumAktif();
        $this->load->view('back/admin/forum_relawan/list_forum', $data);
    }

    public function list_pengajuan_forum()
    {
        $data['data_pengajuan'] = $this->forum_relawan->getAllPengajuan();

        $this->load->view('back/admin/forum_relawan/list_pengajuan', $data);
    }

    public function hapus_pengajuan()
    {
        $id_akun = $_GET['id_akun'];
        $this->akun->hapus_akun($id_akun);
        echo $this->session->set_flashdata('msg', 'Dihapus');
        redirect('admin/forum_relawan/list_pengajuan_forum');
    }

    public function hapus_data_forum()
    {
        $id_akun = $_GET['id_akun'];
        $this->akun->hapus_akun($id_akun);
        echo $this->session->set_flashdata('msg', 'Dihapus');
        redirect('admin/forum_relawan/list_forum');
    }

    public function detail_forum()
    {
        $id_akun = $_GET['id_akun'];
        $data['pengajuan_forum'] = $this->forum_relawan->getPengajuanById($id_akun);
        $this->load->view('back/admin/forum_relawan/detail_forum', $data);
    }

    public function detail_pengajuan()
    {
        $id_forum = $_GET['id_forum'];
        $data['pengajuan_forum'] = $this->forum_relawan->getPengajuanById($id_forum);

        $this->load->view('back/admin/forum_relawan/detail_pengajuan', $data);
    }

    public function acc_pengajuan()
    {
        $id_forum = $_GET['id_forum'];
        $this->forum_relawan->accPengajuanForum($id_forum);
        echo $this->session->set_flashdata('msg', 'Disetujui');
        redirect('admin/forum_relawan/list_forum');
    }
}