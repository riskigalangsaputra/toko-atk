<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->user_model->isNotLogin()) redirect(site_url('/'));

		if($this->user_model->isNotLogin() == FALSE && $this->session->userdata('user_logged')->role != 'admin') {
			redirect(site_url('page_not_found'));
		}

		$this->load->model("product_model");
	} 
	
	public function index() {
		$data["datas"] = $this->product_model->getProduct();
		$this->template->view('backend/template/layout','backend/master/product/list', $data);
	}

	public function form() {
		$this->template->view('backend/template/layout','backend/master/product/form');
	}

	public function edit($id) {
		$data["datas"] = $this->product_model->getProductById($id);
		$this->template->view('backend/template/layout','backend/master/product/edit', $data);
	}

	public function save() {
		$this->product_model->save();
		$this->session->set_flashdata('success', 'Product berhasil ditambahkan');
		redirect('backend/master/product');
	}

	public function update() {
		$this->product_model->update();
        $this->session->set_flashdata('success', 'Data product berhasil diupdate');
        redirect('backend/master/product');
	}

	public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
        	$this->session->set_flashdata('success', 'Data product berhasil dihapus');
            redirect(site_url('backend/master/product'));
        }
    }
}