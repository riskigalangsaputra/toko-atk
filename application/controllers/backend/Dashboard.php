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

		$this->load->model("user_model");
		$this->load->model("product_model");
		$this->load->model("transaction_model");
	} 

	public function index()
	{
		$data = [
			"users" => $this->user_model->getAll(),
			"products" => $this->product_model->getProduct(),
			"transactions" => $this->transaction_model->getAll()

		];
		$this->template->view('backend/template/layout','backend/dashboard/index', $data);
	}
}