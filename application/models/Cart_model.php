<?php
class Cart_model extends CI_Model
{
	private $_table = "cart";

	public $id_cart;
	public $id_product;
	public $id_user;
    public $product_qty;
    public $product_price;
    public $total;
    public $status;


    public function getCartById($id) {
        return $this->db->get_where($this->_table, ["id_cart" => $id])->row();
    }

    public function getCartByUserId($id)
    {
        $this->db->select("*");
        $this->db->from("cart c");
        $this->db->join('product p', 'p.id_product = c.id_product', 'left');
        $this->db->where("id_user = '".$id."' AND status = 'belum_checkout'");
        return $this->db->get()->result();
    }

        public function getCartStatusCheckout($id)
    {
        $this->db->select("*");
        $this->db->from("cart k");
        $this->db->join('product p', 'p.id_product = k.id_product', 'left');
        $this->db->where("id_user = '".$id."' AND status = 'sudah_checkout'");
        return $this->db->get()->result();
    }

    public function findById($id) {
    	return $this->db->get_where($this->_table, ['id_jenis_product' => $id])->row();
    }

    public function insert($idProd, $prodPrice, $qty) {

        $ttlPriceProd = $prodPrice * $qty;

        $post = $this->input->post();
        $this->id_cart = uniqid();
        $this->id_product = $idProd;
        $this->id_user = $this->session->userdata('user_logged')->id_user;
        $this->product_qty = $qty;
        $this->product_price = $prodPrice;
        $this->total = $ttlPriceProd;
        $this->status = "belum_checkout";
        return $this->db->insert($this->_table, $this);
    }

    public function update_data($where, $data){
        $this->db->where($where);
        $this->db->update($this->_table,$data);
    }

    public function count_cart() {
    if ($this->session->userdata('user_logged') == TRUE) {
        $idUsr = $this->session->userdata('user_logged')->id_user;
        $query = $this->db->query("SELECT * FROM cart WHERE id_user = '".$idUsr."' AND status = 'belum_checkout'");
        return $query->num_rows();
    } 
        return 0;
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_cart" => $id));
    }

}