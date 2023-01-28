<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		must_login();

		$data['jm_ruang'] = $this->m_data->ruang()->num_rows();
		$data['jm_pengguna'] = $this->m_data->gtk()->num_rows();
		$data['jm_barang'] = $this->m_data->semuausulan()->num_rows();

		$data['chat'] = $this->m_data->chat()->result();

		$jml = $data['jumlah'] = $this->m_data->chat()->num_rows();

		if ($jml < 11 ) { $i = 0;} else {$i = $jml - 10;}
		$data['i'] = $i;


		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/konten', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function ruang()
	{
		must_login(); is_admin();

		$data['ruang'] = $this->m_data->ruang()->result();
		$data['wali'] = $this->m_data->waliKelas()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/ruang', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function gtk()
	{
		must_login(); is_admin();

		$data['gtk'] = $this->m_data->gtk()->result();
		$data['wali'] = $this->m_data->waliKelas()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/gtk', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function snp()
	{
		must_login(); is_admin();

		$data['snpkepsek'] = $this->m_data->snpkepsek()->result(); // 1
		$data['snpwakasek'] = $this->m_data->snpwakasek()->result(); // 2
		$data['snptu'] = $this->m_data->snptu()->result(); // 3
		$data['snpkalab'] = $this->m_data->snpkalab()->result(); // 4 
		$data['snpperpus'] = $this->m_data->snpperpus()->result(); // 5
		$data['snplab'] = $this->m_data->snplab()->result(); // 6
		$data['snpkelas'] = $this->m_data->snpkelas()->result(); // 7
		$data['snpguru'] = $this->m_data->snpguru()->result(); // 8
		$data['snpibadah'] = $this->m_data->snpibadah()->result(); // 9
		$data['snpbk'] = $this->m_data->snpbk()->result(); // 10
		$data['snpuks'] = $this->m_data->snpuks()->result(); // 11
		$data['snposis'] = $this->m_data->snposis()->result(); //12
		$data['snpwc'] = $this->m_data->snpwc()->result(); //13
		$data['snpgudang'] = $this->m_data->snpgudang()->result(); // 14


		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/snp', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function nonsnp()
	{
		must_login();

		$data['nonsnpkepsek'] = $this->m_data->nonsnpkepsek()->result(); // 1
		$data['nonsnpwakasek'] = $this->m_data->nonsnpwakasek()->result(); // 2
		$data['nonsnptu'] = $this->m_data->nonsnptu()->result(); // 3
		$data['nonsnpkalab'] = $this->m_data->nonsnpkalab()->result(); // 4 
		$data['nonsnpperpus'] = $this->m_data->nonsnpperpus()->result(); // 5
		$data['nonsnplab'] = $this->m_data->nonsnplab()->result(); // 6
		$data['nonsnpkelas'] = $this->m_data->nonsnpkelas()->result(); // 7
		$data['nonsnpguru'] = $this->m_data->nonsnpguru()->result(); // 8
		$data['nonsnpibadah'] = $this->m_data->nonsnpibadah()->result(); // 9
		$data['nonsnpbk'] = $this->m_data->nonsnpbk()->result(); // 10
		$data['nonsnpuks'] = $this->m_data->nonsnpuks()->result(); // 11
		$data['nonsnposis'] = $this->m_data->nonsnposis()->result(); //12
		$data['nonsnpwc'] = $this->m_data->nonsnpwc()->result(); //13
		$data['nonsnpgudang'] = $this->m_data->nonsnpgudang()->result(); // 14

		$data['kelas'] = $this->m_data->ruangKelas()->result();
		$data['laboratorium'] = $this->m_data->laboratorium()->result();


		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/nonsnp', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function input()
	{
		must_login();

		$data['kelas'] = $this->m_data->ruangKelas()->result();
		$data['laboratorium'] = $this->m_data->laboratorium()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/input', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function tampil()
	{
		must_login();

		$jenisRuang = $this->input->post('jenisRuang');
		$detailLab = $this->input->post('detail-lab');
		$detailKelas = $this->input->post('detail-kls');

		if (($detailLab != '') && ($detailKelas == '')) {
			$this->tampila($jenisRuang,$detailLab); // mengarah ke halaman laboratorium
		} elseif (($detailLab == '') && ($detailKelas != '')) {
			$this->tampilc($jenisRuang,$detailKelas); // mengaharah ke halaman kelas
		} elseif (($detailLab == '') && ($detailKelas == '')) {
			$this->tampilb($jenisRuang); // mengarah jke ruangan umum
		}
		
	}

	function tampila($jenisRuang,$detailLab) {
		must_login();
		// tampilan input laboratorium

		$ada = $this->db->get_where('tb_datarekap',['jenisRuangan' => $jenisRuang, 'detailLab' => $detailLab])->row();

		if ($ada) {
			$data['sudah'] = '1';
			$this->db->where('jenisRuangan', $jenisRuang);
			$this->db->where('detailLab', $detailLab);
			$query = $this->db->get('tb_datarekap');
			$data['barang'] = $query->result();
			

		} else {
			$data['sudah'] = '';
			$this->db->where('jenisRuangan', $jenisRuang);
			$this->db->where('detailLab', $detailLab);
			$query = $this->db->get('tb_snp');
			$data['barang'] = $query->result();
		}
		
		$data['namaRuang'] = $this->db->get_where('tb_listruang',['lab' => $detailLab])->row_array()['jnsRuang'];
		$data['kelas'] = $this->m_data->ruangKelas()->result();
		$data['detailKelas'] = '';
		$data['laboratorium'] = $this->m_data->laboratorium()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/tampil', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	function tampilb($jenisRuang) 
	{
		must_login();

		// tampilan input ruang selain laboratorium
		$ada = $this->db->get_where('tb_datarekap',['jenisRuangan' => $jenisRuang])->row();

		if ($ada) {
			$data['sudah'] = '1';
			$this->db->where('jenisRuangan', $jenisRuang);
			$query = $this->db->get('tb_datarekap');
			$data['barang'] = $query->result();
			

		} else {
			$data['sudah'] = '';
			$this->db->where('jenisRuangan', $jenisRuang);
			$query = $this->db->get('tb_snp');
			$data['barang'] = $query->result();
		}
		
		$data['namaRuang'] = $this->db->get_where('tb_listruang',['idRuang' => $jenisRuang])->row_array()['jnsRuang'];
		$data['kelas'] = $this->m_data->ruangKelas()->result();
		$data['detailKelas'] = '';
		$data['laboratorium'] = $this->m_data->laboratorium()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/tampil', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	function tampilc($jenisRuang,$detailKelas)
	{
		must_login();

		// tampilan input kelas

		$ada = $this->db->get_where('tb_datarekap',['jenisRuangan' => $jenisRuang, 'detailKelas' => $detailKelas])->row();

		if ($ada) {
			$data['sudah'] = '1';
			$this->db->where('jenisRuangan', $jenisRuang);
			$this->db->where('detailKelas', $detailKelas);
			$query = $this->db->get('tb_datarekap');
			$data['barang'] = $query->result();
			

		} else {
			$data['sudah'] = '';
			$this->db->where('jenisRuangan', $jenisRuang);
			$query = $this->db->get('tb_snp');
			$data['barang'] = $query->result();
		}
		
		$data['namaRuang'] = $this->db->get_where('tb_ruang',['kodeRuang' => $detailKelas])->row_array()['namaRuang'];
		$data['kelas'] = $this->m_data->ruangKelas()->result();
		$data['detailKelas'] = $detailKelas;
		$data['laboratorium'] = $this->m_data->laboratorium()->result();


		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/tampil', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function profile()
	{
		must_login();
		$data['profile'] = $this->m_data->profile()->row_array();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/profile', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function usul()
	{
		must_login();

		$data['usulan'] = $this->m_data->usulan()->result_array();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/usul', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	public function kelolausul()
	{
		must_login();

		$data['usulan'] = $this->m_data->rekapusulan()->result_array();

		$qaprove = $this->db->get_where('tb_usulan', ['status' => '3'])->result();
		$jap = array();
		foreach ($qaprove as $value) {
			array_push($jap, $value->jmlHarga);
		}
		$data['jmlAprove'] = array_sum($jap);

		$qreject = $this->db->get_where('tb_usulan', ['status' => '0'])->result();
		$rej = array();
		foreach ($qreject as $val) {
			array_push($rej, $val->jmlHarga);
		}
		$data['jmlReject'] = array_sum($rej);

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/kelolausul', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

	function prevbarang()
	{
		must_login();
		pg_kepsek(); pg_wakasek();

		$data['barangkepsek'] = $this->m_data->barangkepsek()->result();
		$data['barangperpustakaan'] = $this->m_data->barangperpustakaan()->result();
		$data['baranglabbiologi'] = $this->m_data->baranglabbiologi()->result();
		$data['baranglabkimia'] = $this->m_data->baranglabkimia()->result();
		$data['baranglabfisika'] = $this->m_data->baranglabfisika()->result();
		$data['baranglabbahasa'] = $this->m_data->baranglabbahasa()->result();
		$data['baranglabkomputer'] = $this->m_data->baranglabkomputer()->result();
		$data['baranglabips'] = $this->m_data->baranglabips()->result();
		$data['barangruanguru'] = $this->m_data->barangruanguru()->result();
		$data['barangruangtata'] = $this->m_data->barangruangtata()->result();
		$data['barangruangibadah'] = $this->m_data->barangruangibadah()->result();
		$data['barangruangkonsol'] = $this->m_data->barangruangkonsol()->result();
		$data['barangruanguks'] = $this->m_data->barangruanguks()->result();
		$data['barangruangosis'] = $this->m_data->barangruangosis()->result();
		$data['barangruangtoilet'] = $this->m_data->barangruangtoilet()->result();
		$data['barangruanggudang'] = $this->m_data->barangruanggudang()->result();




		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/prevbarang', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	function prevusul()
	{
		must_login();
		pg_kepsek(); pg_wakasek();

		$filter = $this->input->post('filter');
		if (isset($filter)) {
			$pengusul = $this->input->post('pengusul');
			$status = $this->input->post('status');

			$data['barang'] = $this->m_data->filterusul($pengusul,$status)->result();
			$data['pengusul'] = $this->m_data->dpengusul()->result();
			$data['usul'] = $pengusul;
			$data['stat'] = $status;
		} else {
			$data['barang'] = $this->m_data->semuausulan()->result();
			$data['pengusul'] = $this->m_data->dpengusul()->result();
			$data['usul'] = '';
			$data['stat'] = '';
		}

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/side');
		$this->load->view('admin/prevusul', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	function printusul()
	{
		$pengusul = $this->uri->segment(3);
		$status = $this->uri->segment(4);

		if ($status == '' && $pengusul != 'x') {
			$sts = 'Semua data usulan barang';
		} elseif ($status == '1' && $pengusul != 'x') {
			$sts = 'Data usulan barang dalam review';
		} elseif ($status == '2' && $pengusul != 'x') {
			$sts = 'Data usulan barang direkomendasi wakasek';
		} elseif ($status == '3' && $pengusul != 'x') {
			$sts = 'Data usulan disetujui kepala sekolah';
		} else {
			$sts = 'Data';
		}
		

		if ($pengusul == '' && $status == '') {
			$data['barang'] = $this->m_data->semuausulan()->result();
			$data['st'] = $sts;
		} elseif ($pengusul != '' && $pengusul != 'x' && $status == '') {
			$data['barang'] = $this->m_data->print1($pengusul)->result();
			$data['st'] = $sts;
		} elseif ($pengusul == 'x' || ($status != '' && $pengusul == '')) {
			$data['barang'] = $this->m_data->print2($status)->result();
			$data['st'] = $sts;
		} elseif ($pengusul != '' && $pengusul != 'x' && $status != '') {
			$data['barang'] = $this->m_data->print3($pengusul,$status)->result();
			$data['st'] = $sts;
		} elseif ($pengusul == 'x') {
			$data['barang'] = $this->m_data->print2($status)->result();
			$data['st'] = $sts;
		}

		$this->load->view('admin/printusul', $data);
		
	}

	

	function printbarang()
	{
		must_login();

		$data['barangkepsek'] = $this->m_data->barangkepsek()->result();
		$data['barangperpustakaan'] = $this->m_data->barangperpustakaan()->result();
		$data['baranglabbiologi'] = $this->m_data->baranglabbiologi()->result();
		$data['baranglabkimia'] = $this->m_data->baranglabkimia()->result();
		$data['baranglabfisika'] = $this->m_data->baranglabfisika()->result();
		$data['baranglabbahasa'] = $this->m_data->baranglabbahasa()->result();
		$data['baranglabkomputer'] = $this->m_data->baranglabkomputer()->result();
		$data['baranglabips'] = $this->m_data->baranglabips()->result();
		$data['barangruanguru'] = $this->m_data->barangruanguru()->result();
		$data['barangruangtata'] = $this->m_data->barangruangtata()->result();
		$data['barangruangibadah'] = $this->m_data->barangruangibadah()->result();
		$data['barangruangkonsol'] = $this->m_data->barangruangkonsol()->result();
		$data['barangruanguks'] = $this->m_data->barangruanguks()->result();
		$data['barangruangosis'] = $this->m_data->barangruangosis()->result();
		$data['barangruangtoilet'] = $this->m_data->barangruangtoilet()->result();
		$data['barangruanggudang'] = $this->m_data->barangruanggudang()->result();




		
		$this->load->view('admin/printbarang', $data);


	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */