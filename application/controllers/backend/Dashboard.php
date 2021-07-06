<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->user_model->isNotLogin()) redirect(site_url('/'));

		if($this->user_model->isNotLogin() == FALSE && $this->session->userdata('user_logged')->role != 'admin') {
			redirect(site_url('page_not_found'));
		}
	} 

	public function index()
	{
		$this->template->view('backend/template/layout','backend/dashboard/index');
	}
}