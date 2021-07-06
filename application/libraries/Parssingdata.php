<?php
class Parssingdata {

  	protected $CI;

  	public $produks = array();
	
    public function __construct()
	{
    	$this->CI =& get_instance();

    	$this->countCart();
	}


	public function countCart() {
		$this->CI->load->model('cart_model');

		$this->total_cart = $this->CI->cart_model->count_cart();
	}
}