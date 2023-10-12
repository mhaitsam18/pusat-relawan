<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelatihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tanggal');
        $this->load->model('model_pelatihan', 'pelatihan');
    }

    public function detail_pelatihan()
    {
        $id_pelatihan = $_GET['id_pelatihan'];
        $data['data_pelatihan'] = $this->pelatihan->getPelatihanById($id_pelatihan);

        $relawan = $this->db->get_where('relawan', ['id_akun' => $this->session->userdata('id_akun')])->row_array();

        $where_tergabung = [
            'id_relawan' => $relawan['id_relawan'],
            'id_pelatihan' => $id_pelatihan,
        ];

        $tergabung = $this->db->get_where('pelatihan_relawan', $where_tergabung)->row_array();

        // var_dump($tergabung);die();

        $data['tergabung'] = $tergabung;

        $this->load->view('front/pelatihan/detail_pelatihan', $data);
    }

    public function input_pengajuan_pelatihan()
    {
        $data = array(
            'id_pelatihan' => $this->input->post('id_pelatihan'),
            'id_relawan' => $this->session->userdata('id_relawan'),
            'alasan_bergabung' => $this->input->post('alasan_bergabung'),
        );

        $this->pelatihan->inputPengajuanPelatihan($data);
        $this->session->set_flashdata('msg', '
		<div class="alert alert-block alert-success"></i></button>
		<i class="ace-icon fa fa-bullhorn green "></i> <p class="text-center"> PENGAJUAN BERGABUNG SEDANG DIPROSES. SILAHKAN MENUNGGU INFORMASI SELANJUTNYA </p>
		</div>');
        redirect(base_url('pelatihan/detail_pelatihan?id_pelatihan=' . $data['id_pelatihan']));
    }
}