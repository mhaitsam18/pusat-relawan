<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_akun', 'akun');
        $this->load->model('model_forum_relawan', 'forum');
        if ($this->session->userdata('login_forum') == false) {
            redirect(base_url("login"));
        }
    }

    public function index()
    {

        $data = [
            'total_bencana' => $this->forum->get_data_dashboard('bencana'),
            'total_pelatihan' => $this->forum->get_data_dashboard('pelatihan'),
            'total_relawan_bencana' => $this->forum->get_data_dashboard('forum_relawan'),
            'total_relawan_pelatihan' => $this->forum->get_count_pelatihan_relawan(),
        ];

        $this->load->view('back/forum_relawan/dashboard', $data);
    }

}