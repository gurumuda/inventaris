<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ubah extends CI_Model {

	function ubahRuang($table,$id,$data)
	{
		$this->db->where('id_', $id);
		$ubah = $this->db->update($table, $data);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}	

	function ubahGTK($table,$id,$data)
	{
		$this->db->where('id_', $id);
		$ubah = $this->db->update($table, $data);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	function statusgtk($table, $data, $id)
	{
		$this->db->where('id_', $id);
		$ubah = $this->db->update($table, $data);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function profile($table, $id_, $data)
	{
		$this->db->where('id_', $id_);
		$ubah = $this->db->update($table, $data);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function pengelolaruang($table, $x, $pengelola)
	{
		$this->db->where('pengelola', $pengelola);
		$ubah = $this->db->update($table, $x);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function cek($object, $id_)
	{
		$this->db->where('id_', $id_);
		$ubah = $this->db->update('tb_usulan', $object);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file Ubah.php */
/* Location: ./application/models/Ubah.php */