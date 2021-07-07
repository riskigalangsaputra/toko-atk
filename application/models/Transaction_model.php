<?php
class Transaction_model extends CI_Model
{
	public function insert($data, $table){
        $this->db->insert($table,$data);
    }

    public function getById($table, $id) {
        return $this->db->get_where($table, ["id_transaction" => $id])->row();
    }

    public function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function getAll()
    {
        $query = $this->db->query("select * from transaction t INNER JOIN user u ON t.id_user = u.id_user");
        return $query->result();
    }
    
    public function getTransaction()
    {
        $query = $this->db->query("select * from transaction t INNER JOIN user u ON t.id_user = u.id_user where t.status = 'WAITING_PAYMENT'");
        return $query->result();
    }
}