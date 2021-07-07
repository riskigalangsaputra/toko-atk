<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->user_model->isNotLogin()) redirect(site_url('/'));

		if($this->user_model->isNotLogin() == FALSE && $this->session->userdata('user_logged')->role != 'admin') {
			redirect(site_url('page_not_found'));
		}

		$this->load->model("transaction_model");
	} 

	public function index() {
		$data["datas"] = $this->transaction_model->getTransaction();
		$this->template->view('backend/template/layout','backend/transaction/list',$data);
	}

	public function history() {
		$data["datas"] = $this->transaction_model->getAll();
		$this->template->view('backend/template/layout','backend/transaction/history',$data);
	}

	public function pay($id) {
		$transaction = $this->transaction_model->getById("transaction", $id);
		if ($transaction != null) {
			$data = array(
					'status' => "PAID" 
				);
			 
				$where = array(
					'id_transaction' => $transaction->id_transaction
				);
			$this->transaction_model->update_data($where, $data, "transaction");
			$this->session->set_flashdata('success', 'Transaksi berhasil diupdate');
			redirect('backend/transaction');
		}
	}
}