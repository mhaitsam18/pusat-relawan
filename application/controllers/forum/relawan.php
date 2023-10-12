<?php
defined('BASEPATH') or exit('No direct script access allowed');

class relawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_akun', 'akun');
        $this->load->model('model_forum_relawan', 'relawan');
        $this->load->model('model_relawan', 'forum_relawan');
        if ($this->session->userdata('login_forum') == false) {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $id_forum = $this->session->userdata('id_forum');
        $data['data_relawan'] = $this->relawan->getAllRelawanByForumId($id_forum);
        // var_dump($id_forum);die();

        $this->load->view('back/forum_relawan/relawan/list_relawan', $data);
        // $this->session->unset_userdata('msg');
    }

    public function detail_relawan()
    {
        $id_relawan = $_GET['id_relawan'];
        $data['data_relawan'] = $this->forum_relawan->getRelawanById($id_relawan);
        $this->load->view('back/forum_relawan/relawan/detail_relawan', $data);
    }

    public function list_pengajuan_relawan()
    {

        $id_forum = $this->session->userdata('id_forum');
        $data['data_pengajuan'] = $this->relawan->getAllPengajuanRelawanByForumId($id_forum);
        $this->load->view('back/forum_relawan/relawan/list_pengajuan', $data);
    }

    public function detail_pengajuan_relawan()
    {
        $id_relawan = $_GET['id_relawan'];
        $data['pengajuan_relawan'] = $this->relawan->getDetailPengajuanRelawanById($id_relawan);
        $this->load->view('back/forum_relawan/relawan/detail_pengajuan', $data);
    }

    public function acc_pengajuan_relawan()
    {
        $id_relawan = $_GET['id_relawan'];
        $this->relawan->accPengajuanRelawan($id_relawan);
        $this->session->set_flashdata('msg', 'Disetujui');
        redirect('forum/relawan');
    }

    public function tolak_pengajuan_relawan()
    {
        $id_relawan = $_GET['id_relawan'];
        $this->relawan->tolakPengajuanRelawan($id_relawan);
        echo $this->session->set_flashdata('msg', 'Ditolak');
        redirect('forum/relawan');
    }

    public function hapus_pengajuan_relawan($id_relawan)
    {

        $where = [
            'id_relawan' => $id_relawan,
            'id_forum' => $this->session->userdata('id_forum'),
        ];

        $this->relawan->hapusRelawan($where);
        echo $this->session->set_flashdata('msg', 'Dihapus');
        redirect('forum/relawan/list_pengajuan_relawan');
    }

    public function hapus_relawan($id_relawan)
    {
        // $id_relawan = $_GET['id_relawan'];
        $where = [
            'id_relawan' => $id_relawan,
            'id_forum' => $this->session->userdata('id_forum'),
        ];

        $this->relawan->hapusRelawan($where);
        echo $this->session->set_flashdata('msg', 'Dihapus');
        redirect('forum/relawan');
    }
}