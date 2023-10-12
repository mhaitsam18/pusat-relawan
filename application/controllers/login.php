<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_akun', 'akun');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function aksi_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_message('required', '{field} mohon diisi');

        //CEK VALIDASI DATA
        if ($this->form_validation->run() != false) {
            //CEK INPUTAN USER
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            //UBAH PASSWORD KE MD5 AGAR TERBACA DDENGAN PASSWORD DI DATABASE
            $passwordMD5 = MD5($password);

            //CEK AKUN KE MODEL (model_akun)
            $data_akun = $this->akun->cek_autentikasi($email, $passwordMD5);

            $id_akun = $data_akun[0]->id_akun;

            $get_data_admin = $this->akun->get_data_admin($id_akun);
            $get_data_forum = $this->akun->get_data_forum($id_akun);
            $get_data_relawan = $this->akun->get_data_relawan($id_akun);

            $hasil_cek_admin = count($get_data_admin);
            $hasil_cek_forum = count($get_data_forum);
            $hasil_cek_relawan = count($get_data_relawan);

            if ($hasil_cek_admin > 0) {
                $id_akun = $this->akun->get_data_admin($id_akun)[0]->id_akun;
                $id_admin = $this->akun->get_data_admin($id_akun)[0]->id_admin;
                $nama_lengkap = $this->akun->get_data_admin($id_akun)[0]->nama_lengkap;
                $data_session = array(
                    'id_akun' => $id_akun,
                    'id_admin' => $id_admin,
                    'nama_lengkap' => $nama_lengkap,
                    'login_admin' => true,
                );

                $this->session->set_userdata($data_session);

                redirect(base_url('admin/dashboard'));

            } elseif ($hasil_cek_forum) {

                $id_forum = $this->akun->get_data_forum($id_akun)[0]->id_forum;
                $nama_forum = $this->akun->get_data_forum($id_akun)[0]->nama_forum;
                $status_pengajuan = $this->akun->get_data_forum($id_akun)[0]->status_pengajuan;

                $data_session = array(
                    'id_akun' => $id_akun,
                    'id_forum' => $id_forum,
                    'nama_forum' => $nama_forum,
                    'login_forum' => true,
                );
                $this->session->set_userdata($data_session);

                redirect(base_url('forum/dashboard'));
            } elseif ($hasil_cek_relawan > 0) {
                $id_akun = $this->akun->get_data_relawan($id_akun)[0]->id_akun;
                $id_relawan = $this->akun->get_data_relawan($id_akun)[0]->id_relawan;
                $nama_lengkap = $this->akun->get_data_relawan($id_akun)[0]->nama_lengkap;
                $data_session = array(
                    'id_akun' => $id_akun,
                    'id_relawan' => $id_relawan,
                    'nama_lengkap' => $nama_lengkap,
                    'login_relawan' => true,
                );

                $this->session->set_userdata($data_session);

                redirect(base_url('beranda'));
            } else {
                //TAMPILKAN PESAN KETIKA GAGAL LOGIN
                $this->session->set_flashdata('msg', '
                <div class="alert alert-block alert-danger"></i></button>
                <i class="ace-icon fa fa-bullhorn green"></i> EMAIL ATAU PASSWORD SALAH / AKUN BELUM DIAKTIVASI ADMIN
                </div>');
                redirect(base_url('login'));
            }
        } else {
            $this->load->view('login');
        }
    }

}