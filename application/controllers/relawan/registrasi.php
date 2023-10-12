<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_registrasi', 'registrasi');
		$this->load->model('model_relawan', 'relawan');
    }

    public function index() 
    {
	
		if (isset($_POST['kirim'])) {
            $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Pendaftar', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('nomor_handphone', 'Nomor Handphone', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
            $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
            $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
            $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
            $this->form_validation->set_rules('deskripsi_keahlian', 'Deskripsi Keahlian', 'required');

            $this->form_validation->set_message('required', '{field} mohon diisi');
            
            if($this->form_validation->run() != false){

                $config['upload_path'] 		= './assets/images/foto_relawan'; //path folder
                $config['allowed_types']	= 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']         = 1024; // 1MB
                $config['encrypt_name'] 	= TRUE; //nama yang terupload nantinya
        
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto'))
                {
                    $foto = $this->upload->data();
                    $foto_name = $foto['file_name'];

                    $data = array(
                        'nama_lengkap' 		=> $this->input->post('nama_lengkap'), 
                        'email'				=> $this->input->post('email'), 
                        'password' 			=> md5($this->input->post('password')),
                        'nomor_handphone'	=> $this->input->post('nomor_handphone'),
                        'foto'              => $foto_name
                    );

                    $config['upload_path'] 		= './assets/berkas_relawan'; //path folder
                    $config['allowed_types']	= 'pdf'; //type yang dapat diakses bisa anda sesuaikan
                    $config['max_size']         = 5120; // 5MB

                    //UPLOAD berkas_surat_keterangan_sehat
                    $this->upload->initialize($config);
                    
                    $this->upload->do_upload('berkas_surat_keterangan_sehat');
                    $berkas_sks         = $this->upload->data();
                    $berkas_sks_name    = $berkas_sks['file_name'];

                    //UPLOAD berkas SKCK
                    $this->upload->do_upload('berkas_skck');
                    $berkas_skck        = $this->upload->data();
                    $berkas_skck_name   = $berkas_skck['file_name'];

                    //UPLOAD berkas surat_persetujuan_wali
                    $this->upload->do_upload('berkas_surat_persetujuan_wali');
                    $berkas_persetujuan         = $this->upload->data();
                    $berkas_persetujuan_name    = $berkas_persetujuan['file_name'];

                    //UPLOAD berkas berkas_ktp
                    $this->upload->do_upload('berkas_ktp');
                    $berkas_ktp      = $this->upload->data();
                    $berkas_ktp_name = $berkas_ktp['file_name'];
    
                    //INSERT KE TABEL AKUN AND GET LAST ID AUTO INCREMENT
                    $last_id_akun = $this->registrasi->input_akun($data);
        
                    $data = array(
                        'id_akun' 			        => $last_id_akun,
                        'alamat' 		            => $this->input->post('alamat'),  
                        'provinsi' 			        => $this->input->post('provinsi'), 
                        'kabupaten'			        => $this->input->post('kabupaten'), 
                        'kecamatan' 		        => $this->input->post('kecamatan'), 
                        'kode_pos' 			        => $this->input->post('kode_pos'),
                        'deskripsi_keahlian' 	    => $this->input->post('deskripsi_keahlian'),
                        'surat_keterangan_sehat'    => $berkas_sks_name,
                        'skck'                      => $berkas_skck_name,
                        'surat_persetujuan_wali'    => $berkas_persetujuan_name,
                        'foto_ktp'                  => $berkas_ktp_name
                    );
                    //INSERT KE TABEL FORUM
                    $this->relawan->input_relawan($data);

                    //MUNCULKAN PESAN BERHASIL REGISTRASI
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-block alert-success"></i></button>
                        <i class="ace-icon fa fa-bullhorn green"></i> REGISTRASI BERHASIL. SILAHKAN LOGIN
                    </div>');
                    redirect(base_url('relawan/registrasi'));
                } else {

                }
            }else{
                $this->load->view('front/relawan/registrasi_relawan');
            }
        }else {
            $this->load->view('front/relawan/registrasi_relawan');
        }
    }
}
