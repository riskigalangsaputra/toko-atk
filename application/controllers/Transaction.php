<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->user_model->isNotLogin() == TRUE) {
			redirect(site_url('/login'));
		}

		$this->load->model("cart_model");
		$this->load->model("transaction_model");
		$this->load->model("product_model");
	} 

	public function checkout()
	{
		$id_user = $this->session->userdata('user_logged')->id_user;
		$carts= $this->cart_model->getCartByUserId($id_user);
		foreach($carts as $row) {
			$data = array(
				'status' => "sudah_checkout" 
			);
		 
			$where = array(
				'id_cart' => $row->id_cart
			);
		 
			$this->cart_model->update_data($where, $data);
		}
		$data["carts"] = $this->cart_model->getCartStatusCheckout($id_user);
		$this->template->view('frontend/template/layout','frontend/transaction/form',$data);
	}

	public function process() {

		$id_user = $this->session->userdata('user_logged')->id_user;
		$carts = $this->cart_model->getCartStatusCheckout($id_user); // status keranjang yg sudah di checkout

		//====================== SET TOTAL TRANSAKSI ======================================================
		$total_price = 0;
		foreach($carts as $row) {
			$total_price += $row->total;
		}


		// insert to pengiriman
		$id_pengiriman = uniqid();
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');

		$pengirimans = array(
			'id_pengiriman' => $id_pengiriman,
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'email' => $email,
			'alamat' => $alamat
		);

		$this->transaction_model->insert($pengirimans,'pengiriman_detail');


		// insert to transaction
		$id_transaction = uniqid();
		$transaction_code = "ATK-".uniqid();
		$status = "WAITING_PAYMENT";
		$create_date = date('Y-m-d');
		$expired_date = date('Y-m-d', strtotime(' +1 day'));

		$transactions = array(
			'id_transaction' => $id_transaction,
			'transaction_code' => $transaction_code,
			'status' => $status,
			'total_price' => $total_price,
			'create_date' => $create_date,
			'expired_date' => $expired_date,
			'id_user' => $id_user,
			'id_pengiriman' => $id_pengiriman
			);

		$this->transaction_model->insert($transactions,'transaction');


		//===================== INSERT TRANSAKSI DETAIL ===================================================
		foreach($carts as $row) {
			$details = array(
				'id_transaction_detail' => uniqid(),
				'id_transaction' => $id_transaction,
				'id_product' => $row->id_product,
				'product_price' => $row->total,
				'qty' => $row->product_qty
				);

			$this->transaction_model->insert($details,'transaction_detail');


			//===================== UPDATE STOCK PRODUCT ===============================================
			$product = $this->product_model->getProductById($row->id_product);
			$stock = $product->stock - $row->product_qty;
			$products = array(
					'stock' => $stock 
				);
			 
				$where = array(
					'id_product' => $product->id_product
				);
		 	
			$this->transaction_model->update_data($where, $products, "product");


			//===================== UPDATE STATUS KERANJANG ===============================================
			$data = array(
					'status' => "ordered" 
				);
			 
				$where = array(
					'id_cart' => $row->id_cart
				);
		 	
			$this->cart_model->update_data($where, $data);
			$this->session->set_flashdata('success', 'Pembelian sedang di proses.. segera melakukan konfirmasi pembayaran');
		}
		redirect('/transaction/end/'.$id_transaction);

	}

	public function end($id_transaction) {
		$data["row"] = $this->transaction_model->getById("transaction", $id_transaction);
		$this->template->view('frontend/template/layout','frontend/transaction/end', $data);
	}
}
