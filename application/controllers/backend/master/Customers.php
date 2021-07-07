<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->user_model->isNotLogin()) redirect(site_url('/'));

		if($this->user_model->isNotLogin() == FALSE && $this->session->userdata('user_logged')->role != 'admin') {
			redirect(site_url('page_not_found'));
		}

		$this->load->model("transaction_model");
	} 

	public function index()
	{
		$data["datas"] = $this->user_model->getAll();
		$this->template->view('backend/template/layout','backend/master/customer/list', $data);
	}

	public function active($id) {
		$users = $this->user_model->findByUserId($id);
		if ($users != null) {

			if ($users->is_active == 1) {
				$data = array(
					'is_active' => 0 
				);
			} else {
				$data = array(
					'is_active' => 1 
				);
			}
			 
			$where = array(
				'id_user' => $users->id_user
			);
			$this->transaction_model->update_data($where, $data, "user");
			$this->session->set_flashdata('success', 'User berhasil diupdate');
			redirect('backend/master/customers');
		}
	}
}