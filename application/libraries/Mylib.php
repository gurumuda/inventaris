<?php 

class Mylib {

	function ambil_data_barang() {
		return $this->db->get('tb_snp');
	}
	
}

