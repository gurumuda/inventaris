<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	function ruang()
	{
		$this->db->select('*, tb_ruang.id_ as id_');
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_ruang.pengelola', 'left');
		$this->db->join('tb_listruang', 'tb_listruang.idRuang = tb_ruang.jenisRuang', 'left');
		return $this->db->get('tb_ruang');
	}

	function waliKelas()
	{
		$this->db->where_not_in('level', '100');
		return $this->db->get('tb_pengguna');
	}

	function ubahRuang($table, $id)
	{
		return $this->db->get_where($table, ['id_' => $id]);
	}

	function ubahGTK($table, $id)
	{
		return $this->db->get_where($table, ['id_' => $id]);
	}

	function gtk()
	{
		$this->db->where_not_in('level', '100');
		return $this->db->get('tb_pengguna');
	}

	function snpkepsek()
	{
		$this->db->where('jenisRuangan', '1');
		return $this->db->get('tb_snp');
	}

	function snpwakasek()
	{
		$this->db->where('jenisRuangan', '2');
		return $this->db->get('tb_snp');
	}

	function snptu()
	{
		$this->db->where('jenisRuangan', '3');
		return $this->db->get('tb_snp');
	}

	function snpkalab()
	{
		$this->db->where('jenisRuangan', '4');
		return $this->db->get('tb_snp');
	}


	function snpperpus()
	{
		$this->db->where('jenisRuangan', '5');
		return $this->db->get('tb_snp');
	}

	function snplab()
	{
		$this->db->where('jenisRuangan', '6');
		return $this->db->get('tb_snp');
	}

	function snpkelas()
	{
		$this->db->where('jenisRuangan', '7');
		return $this->db->get('tb_snp');
	}

	function snpguru()
	{
		$this->db->where('jenisRuangan', '8');
		return $this->db->get('tb_snp');
	}

	function snpibadah()
	{
		$this->db->where('jenisRuangan', '9');
		return $this->db->get('tb_snp');
	}

	function snpbk()
	{
		$this->db->where('jenisRuangan', '10');
		return $this->db->get('tb_snp');
	}

	function snpuks()
	{
		$this->db->where('jenisRuangan', '11');
		return $this->db->get('tb_snp');
	}

	function snposis()
	{
		$this->db->where('jenisRuangan', '12');
		return $this->db->get('tb_snp');
	}

	function snpwc()
	{
		$this->db->where('jenisRuangan', '13');
		return $this->db->get('tb_snp');
	}

	function snpgudang()
	{
		$this->db->where('jenisRuangan', '14');
		return $this->db->get('tb_snp');
	}

	function ruangKelas()
	{
		$this->db->where('jenisRuang', '7');
		return $this->db->get('tb_ruang');
	}
	/**
	Data barang non snp yang diambilkan dari tabel rekap
	**/
	function nonsnpkepsek()
	{
		$this->db->where('jenisRuangan', '1');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpwakasek()
	{
		$this->db->where('jenisRuangan', '2');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnptu()
	{
		$this->db->where('jenisRuangan', '3');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpkalab()
	{
		$this->db->where('jenisRuangan', '4');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}


	function nonsnpperpus()
	{
		$this->db->where('jenisRuangan', '5');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnplab()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpkelas()
	{
		$this->db->where('jenisRuangan', '7');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpguru()
	{
		$this->db->where('jenisRuangan', '8');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpibadah()
	{
		$this->db->where('jenisRuangan', '9');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpbk()
	{
		$this->db->where('jenisRuangan', '10');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpuks()
	{
		$this->db->where('jenisRuangan', '11');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnposis()
	{
		$this->db->where('jenisRuangan', '12');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpwc()
	{
		$this->db->where('jenisRuangan', '13');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}

	function nonsnpgudang()
	{
		$this->db->where('jenisRuangan', '14');
		$this->db->where('ceksnp', '2');
		return $this->db->get('tb_datarekap');
	}
	
	function profile()
	{
		$this->db->where('identitas', $this->session->userdata('identitas'));
		return $this->db->get('tb_pengguna');
	}
	
	function laboratorium()
	{
		if(pg_admin() || pg_kalab()) {
			$this->db->where_not_in('lab', '');
			$data = $this->db->get('tb_listruang');
		} else {
			$pengelola = $this->session->userdata('identitas');
			$this->db->where('pengelola', $pengelola);
			$data = $this->db->get('tb_ruang');
		}

		return $data;
		
	}

	function usulan()
	{
		$this->db->where('id_pengusul', $this->session->userdata('identitas'));
		return $this->db->get('tb_usulan');
	}

	function rekapusulan()
	{	
		$this->db->select('*, tb_usulan.status as stat, tb_usulan.id_ as id_b');
		$this->db->order_by('id_pengusul', 'desc');
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
		return $this->db->get('tb_usulan');
	}

	function barangkepsek()
	{
		$this->db->where('jenisRuangan', '1');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangperpustakaan()
	{
		$this->db->where('jenisRuangan', '5');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function baranglabbiologi()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('detailLab', '1');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function baranglabkimia()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('detailLab', '2');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function baranglabfisika()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('detailLab', '3');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function baranglabbahasa()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('detailLab', '4');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function baranglabkomputer()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('detailLab', '5');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function baranglabips()
	{
		$this->db->where('jenisRuangan', '6');
		$this->db->where('detailLab', '1');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruanguru()
	{
		$this->db->where('jenisRuangan', '7');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruangtata()
	{
		$this->db->where('jenisRuangan', '3');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruangibadah()
	{
		$this->db->where('jenisRuangan', '9');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruangkonsol()
	{
		$this->db->where('jenisRuangan', '10');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruanguks()
	{
		$this->db->where('jenisRuangan', '11');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruangosis()
	{
		$this->db->where('jenisRuangan', '12');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruangtoilet()
	{
		$this->db->where('jenisRuangan', '13');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function barangruanggudang()
	{
		$this->db->where('jenisRuangan', '14');
		$this->db->order_by('ceksnp', 'asc');
		$data = $this->db->get('tb_datarekap');
		return $data;
	}

	function semuausulan()
	{
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
		return $this->db->get('tb_usulan');
	}

	function dpengusul()
	{
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
		$this->db->group_by('id_pengusul');
		$data = $this->db->get('tb_usulan');
		return $data;
	}

	function filterusul($pengusul,$status)
	{
		if ($status != '' && $pengusul != '') {
			$this->db->where('id_pengusul', $pengusul);
			$this->db->where('tb_usulan.status', $status);
			$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
			return $this->db->get('tb_usulan');
		} elseif ($status != '' && $pengusul == '') {
			$this->db->where('tb_usulan.status', $status);
			$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
			return $this->db->get('tb_usulan');
		} elseif ($status == '' && $pengusul != '') {
			$this->db->where('id_pengusul', $pengusul);
			$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
			return $this->db->get('tb_usulan');
		} elseif ($status == '' && $pengusul == '') {
			$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
			return $this->db->get('tb_usulan');
		}
		
		
	}

	function print1($pengusul)
	{
		$this->db->where('id_pengusul', $pengusul);
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');

		return $this->db->get('tb_usulan');
	}

	function print2($status)
	{
		$this->db->where('tb_usulan.status', $status);
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
		return $this->db->get('tb_usulan');
	}

	function print3($pengusul,$status)
	{
		$this->db->where('id_pengusul', $pengusul);
		$this->db->where('tb_usulan.status', $status);
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_usulan.id_pengusul', 'left');
		return $this->db->get('tb_usulan');
	}

	function chat()
	{
		$this->db->join('tb_pengguna', 'tb_pengguna.identitas = tb_obrolan.id_user', 'left');
		$this->db->order_by('tb_obrolan.id_', 'asc');
		return $this->db->get('tb_obrolan');
	}

}

/* End of file M_data.php */
/* Location: ./application/models/M_data.php */
