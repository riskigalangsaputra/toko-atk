<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// validasi jika sudah login maka tidak bisa akses url register lagi
		if($this->user_model->isNotLogin() == FALSE) {
			if ($this->session->userdata('user_logged')->role == 'admin') {
            		redirect(site_url('backend/dashboard'));
        	} else {
        		redirect(site_url('/'));
        	}
		}
	} 

	public function index()
	{
		$this->load->view('register');
	}

	public function process() {
	   if($this->user_model->save()){
           $this->session->set_flashdata('success', 'Register berhasil, silahkan  Sign In.');
           redirect('/login','refresh');
       } else {
           $this->session->set_flashdata('error', 'Register user gagal!');
           redirect('/register','refresh');
       }
	}
}