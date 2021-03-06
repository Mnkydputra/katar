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

	//hapus
	public function delete($where, $table)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}

	// Menyimpan Aktifitas Admin
	public function save_log($param)
	{
		$sql    = $this->db->insert_string('log_aktivitas', $param);
		$ex     = $this->db->query($sql);
		return $this->db->affected_rows($sql);
	}

	//update data
	public function update($data, $table, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

}
