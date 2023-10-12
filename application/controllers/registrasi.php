<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('model_akun', 'akun');
    }
	
	public function index()
	{
		$this->load->view('pilihan_registrasi');
	}
}

?>