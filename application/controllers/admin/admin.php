<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('model_registrasi', 'registrasi');
		$this->load->model('model_admin', 'admin');
		$this->load->model('model_akun', 'akun');
		if($this->session->userdata('login_admin') == FALSE) {
	    	redirect(base_url("login"));
	    }
    }
	
	public function list_admin()
	{
        $data['data_admin'] = $this->admin->getAllAdmin();
		$this->load->view('back/admin/admin/list_admin', $data);
	}


    public function tambah_admin()
    {
        if(isset($_POST['kirim'])) {
            $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required');
            $this->form_validation->set_rules('nomor_handphone', 'Nomor Handphone', 'required');
            $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');
            $this->form_validation->set_rules('foto', 'Foto', 'callback_file_selected');
			$this->form_validation->set_message('required', '{field} mohon diisi');

		    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if($this->form_validation->run() != false) {

                $config['upload_path'] 		= './assets/images/foto_admin'; //path folder
                $config['allowed_types']	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']         = 1024; // 1MB
                $config['encrypt_name'] 	= TRUE; //nama yang terupload nantinya
        
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto'))
                {
                    $foto = $this->upload->data();
				    $foto_name = $foto['file_name'];

                    $data_akun = array(
                        'nama_lengkap' 		=> $this->input->post('nama_lengkap'), 
                        'email'				=> $this->input->post('email'), 
                        'password' 			=> md5($this->input->post('password')),
                        'nomor_handphone'	=> $this->input->post('nomor_handphone'),
                        'foto'              => $foto_name
                    );

                    //INSERT KE TABEL AKUN
				    $last_id_akun = $this->registrasi->input_akun($data_akun);

                    $data_admin = array(
                        'id_akun' 			=> $last_id_akun,
                        'hak_akses' 		=> $this->input->post('hak_akses'),
                    );

                //INSERT KE TABEL ADMIN
				$this->admin->input_admin($data_admin);
                echo $this->session->set_flashdata('msg','Ditambah');
                redirect('admin/admin/list_admin');

                } else {
                    
                }
            }else { 
                $this->load->view('back/admin/admin/tambah_admin');
            }
        }else { 
            $this->load->view('back/admin/admin/tambah_admin');
        }
    }

    public function file_selected(){

        $this->form_validation->set_message('file_selected', 'Gambar Harus Diisi');
        if (empty($_FILES['foto']['name'])) {
                return false;
            }else{
                return true;
            }
	}

    public function hapus_admin()
	{
		$id_akun = $_GET['id_akun'];
		$this->akun->hapus_akun($id_akun);
		echo $this->session->set_flashdata('msg','Dihapus');
		redirect('admin/admin/list_admin');
	}
}
