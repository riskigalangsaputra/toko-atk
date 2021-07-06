<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index(){
		$data["datas"] = $this->product_model->getProduct();
		$this->template->view('frontend/template/layout','frontend/main/index', $data);
	}

	public function view($id) {
		$data["row"] = $this->product_model->getProductById($id);
		$this->template->view('frontend/template/layout','frontend/main/view', $data);
	}
}