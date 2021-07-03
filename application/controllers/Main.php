<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function index()
		{
		$this->template->view('frontend/template/layout','frontend/main/index');
	}
}