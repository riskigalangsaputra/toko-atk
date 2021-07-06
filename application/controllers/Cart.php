<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->user_model->isNotLogin() == TRUE) {
			redirect(site_url('/login'));
		}
		$this->load->model("cart_model");
		$this->load->model("product_model");
	} 

	public function index()
	{
		$id_user = $this->session->userdata('user_logged')->id_user;
		$data["carts"] = $this->cart_model->getCartByUserId($id_user);
		$this->template->view('frontend/template/layout','frontend/cart/list', $data);
	}

	public function add()
	{
		$id_product = $this->input->post('id_product');
		$qty = $this->input->post('qty');
		$prod = $this->product_model->getProductById($id_product);
		$this->cart_model->insert($prod->id_product, $prod->price, $qty);
		$this->session->set_flashdata('success', 'Product berhasil dimasukan ke dalam keranjang');
		redirect('/');
	}

	public function delete($id)
	{
		$this->cart_model->delete($id);
		$this->session->set_flashdata('success', 'Product berhasil dihapus');
		redirect('/cart/');
	}
}