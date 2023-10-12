<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_registrasi', 'registrasi');
		$this->load->model('model_forum_relawan', 'forum');
		
    }

	public function index()
	{
		$this->load->view('front/forum/registrasi_forum');
		$this->session->unset_userdata('msg');
	}

    public function registrasi_forum() 
    {
	
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Pendaftar', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('nomor_handphone', 'Nomor Handphone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required');
		$this->form_validation->set_rules('nama_forum', 'Nama Forum Relawan', 'required');
		$this->form_validation->set_rules('tanggal_berdiri', 'Tanggal Pendirian', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
		$this->form_validation->set_rules('website', 'Website Organisasi', 'required');

		$this->form_validation->set_message('required', '{field} mohon diisi');

		$data['data_validasi'] = array(
			'nama_lengkap' 			=> $this->input->post('nama_lengkap'), 
			'email'					=> $this->input->post('email'), 
			'password' 				=> $this->input->post('password'),
			'konfirmasi_password'	=> $this->input->post('konfirmasi_password'),
			'nomor_handphone'		=> $this->input->post('nomor_handphone'),
			'nama_forum' 			=> $this->input->post('nama_forum'), 
			'tanggal_berdiri' 		=> $this->input->post('tanggal_berdiri'), 
			'lokasi' 				=> $this->input->post('lokasi'), 
			'provinsi' 				=> $this->input->post('provinsi'), 
			'kabupaten'				=> $this->input->post('kabupaten'), 
			'kecamatan' 			=> $this->input->post('kecamatan'), 
			'kode_pos' 				=> $this->input->post('kode_pos'),
			'website' 				=> $this->input->post('website'),
		);


		if($this->form_validation->run() != false){

			$data = array(
				'nama_lengkap' 		=> $this->input->post('nama_lengkap'), 
				'email'				=> $this->input->post('email'), 
				'password' 			=> md5($this->input->post('password')),
				'nomor_handphone'	=> $this->input->post('nomor_handphone')
			);

			//INSERT KE TABEL AKUN AND GET LAST ID AUTO INCREMENT
			$last_id_akun = $this->registrasi->input_akun($data);

			$config['upload_path'] 		= './assets/images/logo_forum'; //path folder
			$config['allowed_types']	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size']         = 1024; // 1MB
			$config['encrypt_name'] 	= TRUE; //nama yang terupload nantinya
	
			$this->upload->initialize($config);
			if ($this->upload->do_upload('logo'))
			{
				$logo = $this->upload->data();
				//Compress Image
				$logo_name= $logo['file_name'];
	
				$data = array(
					'id_akun' 			=> $last_id_akun,
					'nama_forum' 		=> $this->input->post('nama_forum'),  
					'tanggal_berdiri' 	=> $this->input->post('tanggal_berdiri'), 
					'logo' 				=> $logo_name, 
					'lokasi' 			=> $this->input->post('lokasi'), 
					'provinsi' 			=> $this->input->post('provinsi'), 
					'kabupaten'			=> $this->input->post('kabupaten'), 
					'kecamatan' 		=> $this->input->post('kecamatan'), 
					'kode_pos' 			=> $this->input->post('kode_pos'),
					'website' 			=> $this->input->post('website'),
				);
				//INSERT KE TABEL FORUM
				$this->forum->input_forum($data);

				//MUNCULKAN PESAN BERHASIL REGISTRASI
				$this->session->set_flashdata('msg', '
					<div class="alert alert-block alert-success"></i></button>
					<i class="ace-icon fa fa-bullhorn green"></i> REGISTRASI BERHASIL. SILAHKAN LOGIN
				</div>');
				redirect(base_url('forum/registrasi/registrasi_forum'));
			}
		}else{
			$this->load->view('front/forum/registrasi_forum', $data);
		}
    }
}
