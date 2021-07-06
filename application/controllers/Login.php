<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		// validasi jika sudah login maka tidak bisa akses url login lagi
		if($this->user_model->isNotLogin() == FALSE) {
			if ($this->session->userdata('user_logged')->role == 'admin') {
				   $this->session->set_flashdata('error', 'Halaman tidak bisa diakses');
            		redirect(site_url('backend/dashboard'));
        	} else {
        		$this->session->set_flashdata('error', 'Halaman tidak bisa diakses');
        		redirect(site_url('/'));
        	}
		}

		// login sukses akan di arahkan ke halaman sesuai role
		if($this->input->post()){
            if($this->user_model->doLogin()) {
            	if ($this->session->userdata('user_logged')->role == 'admin') {
            		$this->session->set_flashdata('success', 'Login berhasil');
            		redirect(site_url('backend/dashboard'));
            	} else {
            		$this->session->set_flashdata('success', 'Login berhasil');
            		redirect(site_url('/'));
            	}
            } else {
            	$this->session->set_flashdata('error', 'Pastikan email dan password anda dengan benar !');
            	redirect(site_url('/login'));
            }
        }

		$this->load->view('login');
	}

	public function logout()
    {
    	$this->session->set_flashdata('success', 'Berhasil logout');
        $this->session->sess_destroy();
        redirect(site_url('/'));
    }
}