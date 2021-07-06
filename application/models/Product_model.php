<?php

class Product_model extends CI_Model
{
    private $_table = "product";
    public $id_product;
    public $product_code;
    public $product_name;
    public $stock;
    public $price;
    public $photo_product;
    public $description;

    public function getProduct()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getProductById($id)
    {
        return $this->db->get_where($this->_table, ["id_product" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_product = uniqid();
        $this->product_code = $post["product_code"];
        $this->product_name = $post["product_name"];
        $this->stock = $post["stock"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->photo_product = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_product = uniqid();
        $this->product_code = $post["product_code"];
        $this->product_name = $post["product_name"];
        $this->stock = $post["stock"];
        $this->price = $post["price"];
        $this->description = $post["description"];

        if (!empty($_FILES["photo_product"]["name"])) {
            $this->photo_product = $this->_uploadImage();
        } else {
            $this->photo_product = $post["old_image"];
        }

        return $this->db->update($this->_table, $this, array('id_product' => $post['id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id_product;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo_product')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
        return "default.png";
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_product" => $id));
    }

    private function _deleteImage($id)
    {
        $product = $this->getProductById($id);
        if ($product->photo_product != "default.jpg") {
            $filename = explode(".", $product->photo_product)[0];
            return array_map('unlink', glob(FCPATH."/assets/uploads/$filename.*"));
        }
    }

}