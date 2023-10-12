<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_registrasi extends CI_Model {

   function input_akun($data)
   {
      // print_r($akun['nama_lengkap']);
      $this->db->insert('akun', $data);
      $insert_id = $this->db->insert_id();
      return  $insert_id;
   }
}
