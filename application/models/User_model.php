<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function insert($table, $data){
        $this->db->insert($table, $data);
    }

    public function getData($table, $data){
        return $this->db->get_where($table, $data);
    }

    public function update($table, $data, $where){
        $this->db->where($where);
		$this->db->update($table,$data);
    }
}