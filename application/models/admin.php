<?php

class Admin extends CI_Model
{
    //ngambil data dari table 
    public function getData($table)
	{
		return $this->db->get($table);
	}

    //insert data ke dalam table
	public function inputData($data, $table)
	{   
		return $this->db->insert($table, $data);
	}
	
	//cari data berdasarkan inputan 
	public function cari($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

}
?>