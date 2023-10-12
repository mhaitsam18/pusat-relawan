<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {

	public function index()
	{
		$this->session->set_flashdata('msg', '
		<div class="alert alert-block alert-success"></i></button>
		<i class="ace-icon fa fa-bullhorn green"></i> LOG OUT BERHASIL
		</div>');
		$this->session->sess_destroy();
	    redirect(base_url('login'));
	}

}
