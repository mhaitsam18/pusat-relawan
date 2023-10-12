<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bencana extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('model_akun', 'akun');
		$this->load->model('model_bencana', 'bencana');
		if($this->session->userdata('login_forum') == FALSE) {
	    	redirect(base_url("login"));
	    }
    }
	
	public function index()
	{
        $id_forum = $this->session->userdata('id_forum');
        $data['data_bencana'] = $this->bencana->getAllBencanaByForumId($id_forum);
		$this->load->view('back/forum_relawan/bencana/list_bencana', $data);
        // print_r($this->session->flashdata('msg')); die;
        $this->session->unset_userdata('msg');
	}

    public function tambah_bencana()
    {
        if(isset($_POST['kirim'])) {
            $this->form_validation->set_rules('nama_bencana', 'Nama Bencana', 'required');
            $this->form_validation->set_rules('kategori_bencana', 'Kategori Bencana', 'required');
            $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
            $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
            $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
            $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
            $this->form_validation->set_rules('link_berita', 'Link Berita', 'required');
            $this->form_validation->set_rules('jml_relawan', 'Jumlah Relawan', 'required');
            $this->form_validation->set_rules('latitude', 'Latitude', 'required');
            $this->form_validation->set_rules('longitude', 'Longitude', 'required');
            $this->form_validation->set_rules('warna', 'Warna', 'required');
            $this->form_validation->set_rules('gambar', 'Gambar', 'callback_file_selected');
			$this->form_validation->set_message('required', '{field} mohon diisi');

		    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if($this->form_validation->run() != false) {

                $config['upload_path'] 		= './assets/images/gambar_bencana'; //path folder
                $config['allowed_types']	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']         = 1024; // 1MB
                $config['encrypt_name'] 	= TRUE; //nama yang terupload nantinya
        
                $this->upload->initialize($config);
                if ($this->upload->do_upload('gambar'))
                {
                    $gambar = $this->upload->data();
				    $gambar_name = $gambar['file_name'];

                    $data_bencana = array(
                        'id_forum'              => $this->session->userdata('id_forum'),
                        'nama_bencana' 		    => $this->input->post('nama_bencana'), 
                        'id_kategori_bencana'   => $this->input->post('kategori_bencana'), 
                        'kecamatan' 			=> $this->input->post('kecamatan'),
                        'kabupaten'         	=> $this->input->post('kabupaten'),
                        'provinsi'          	=> $this->input->post('provinsi'),
                        'alamat_lengkap'	    => $this->input->post('alamat_lengkap'),
                        'link_berita'	        => $this->input->post('link_berita'),
                        'link_berita'	        => $this->input->post('jml_relawan'),
                        'latitude'	            => $this->input->post('latitude'),
                        'longitude'	            => $this->input->post('longitude'),
                        'warna'	                => $this->input->post('warna'),
                        'gambar'                => $gambar_name
                    );

                    //INSERT KE TABEL BENCANA
				  $this->bencana->input_bencana($data_bencana);
                echo $this->session->set_flashdata('msg','Ditambah');
                redirect('forum/bencana');

                } else {
                    // echo 'sdsd';
                    $this->session->set_flashdata('msg',  $this->upload->display_errors());
                    $this->index();
                    // $this->session->set_flashdata('msg',  $this->upload->display_errors());
                    // $data['kategori_bencana'] = $this->bencana->getAllKategoriBencana();
                    // $this->load->view('back/forum_relawan/bencana/tambah_bencana', $data);
                }
            }else { 
                // $err = $this->upload->display_errors();
                // print_r($err);
				$data['kategori_bencana'] = $this->bencana->getAllKategoriBencana();
            	$this->load->view('back/forum_relawan/bencana/tambah_bencana', $data);
                // $this->session->set_flashdata('msg',  $this->upload->display_errors());
                // $data['kategori_bencana'] = $this->bencana->getAllKategoriBencana();
                // $this->load->view('back/forum_relawan/bencana/tambah_bencana', $data);
            }
        }else { 
            $data['kategori_bencana'] = $this->bencana->getAllKategoriBencana();
            $this->load->view('back/forum_relawan/bencana/tambah_bencana', $data);
        }
    }

    public function file_selected(){

        $this->form_validation->set_message('file_selected', 'Gambar Harus Diisi');
        if (empty($_FILES['gambar']['name'])) {
                return false;
            }else{
                return true;
            }
	}

    public function detail_bencana()
    {
        $id_bencana = $_GET['id_bencana'];
		$data['data_bencana'] = $this->bencana->getBencanaById($id_bencana);
		$this->load->view('back/forum_relawan/bencana/detail_bencana', $data);
    }

    public function hapus_bencana()
	{
		$id_bencana = $_GET['id_bencana'];
		$this->bencana->hapus_bencana($id_bencana);
		echo $this->session->set_flashdata('msg','Dihapus');
		redirect('forum/bencana');
	}

}
