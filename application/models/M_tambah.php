<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tambah extends CI_Model {

	function ruang($data)
	{
		return $this->db->insert('tb_ruang', $data);
	}

	function gtk($data)
	{
		return $this->db->insert('tb_pengguna', $data);
	}

	function barangsnp($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function barangnonsnp($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function usulanBarang($data)
	{
		return $this->db->insert('tb_usulan', $data);
	}

	function pesan($table, $data)
	{
		return $this->db->insert($table, $data);
	}

}

/* End of file M_tambah.php */
/* Location: ./application/models/M_tambah.php */