<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hapus extends CI_Model {

	function ruang($id)
	{
		$this->db->where('id_', $id);
		$hapus = $this->db->delete('tb_ruang');
		if ($hapus) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function gtk($id)
	{
		$this->db->where('id_', $id);
		$hapus = $this->db->delete('tb_pengguna');
		if ($hapus) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function semuaRuang()
	{
		return $this->db->truncate('tb_ruang');
	}

	function semuaGTK()
	{
		$this->db->where_not_in('level', '100');
		return $this->db->delete('tb_pengguna');
	}

	function semuaBarang()
	{
		return $this->db->truncate('tb_snp');
	}

	function semuaBarangnon()
	{
		$this->db->where('ceksnp', '2');
		$hapus = $this->db->delete('tb_datarekap');
		if ($hapus) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file M_hapus.php */
/* Location: ./application/models/M_hapus.php */