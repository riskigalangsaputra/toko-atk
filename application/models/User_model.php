<?php

class User_model extends CI_Model
{
    private $_table = "user";
    public $id_user;
    public $fullname;
    public $username;
    public $email;
    public $phone;
    public $password;
    public $role;
    public $created_at;
    public $last_login;
    public $is_active;

    public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email
        $this->db->where('email', $post["email"]);
        
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);

            // jika password benar
            if($isPasswordTrue){ 

                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);

                $this->_updateLastLogin($user->id_user);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id_user={$id}";
        $this->db->query($sql);
    }

    public function findByUserId($id) {
       return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    // public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }

    public function save()
    {
        $post = $this->input->post();
        $this->fullname = $post["fullname"];
        $this->username = $post["email"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        $pass = $post["password"];
        $this->password = password_hash($pass, PASSWORD_BCRYPT);
        $this->role = "customer";
        $this->created_at = date("Y-m-d");
        $this->is_active = 1;
        return $this->db->insert($this->_table, $this);
    }

    public function getAll()
    {
        $query = $this->db->query("select * from user where role = 'customer'");
        return $query->result();
    }

}