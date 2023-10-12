<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bencana extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_bencana', 'bencana');
    }

    public function detail_bencana()
    {

		
		// var_dump($jml_relawan_gabung);die();

        $id_bencana = $_GET['id_bencana'];
        $data['data_bencana'] = $this->bencana->getBencanaById($id_bencana);
		$jml_relawan_gabung = $this->bencana->count_relawan_gabung($id_bencana);

		$data['sudah_join'] = $jml_relawan_gabung;

        // var_dump($data['data_bencana']->provinsi);die();

        $data['forums'] = $this->db->get_where('forum', ['provinsi' => $data['data_bencana'][0]->provinsi])->result();
        // $data['forums'] = $this->db->get('forum')->result();

        $this->load->view('front/bencana/detail_bencana', $data);
    }
}
