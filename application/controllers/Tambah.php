<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	function ruang()
	{
		$this->form_validation->set_rules('kodeRuang', 'Kode Ruang', 'trim|required|alpha_dash|is_unique[tb_ruang.kodeRuang]',
			['required' => 'Kode Ruang tidak boleh kososng', 'alpha_dash' => 'Kode Ruang tidak boleh mengandung spasi', 'is_unique' => 'Kode Ruang sudah digunakan']
		);
		$this->form_validation->set_rules('namaRuang', 'Nama Ruang', 'trim|required|is_unique[tb_ruang.namaRuang]',
			['is_unique' => 'Nama Ruang sudah digunakan', 'required' => 'Nama Ruang tidak boleh kosong']
		);


		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin/ruang','refresh');
		} else {
			$detailLab = $this->input->post('detailLab');

			if ($detailLab == '') {
				$data = [
					'jenisRuang' => $this->input->post('jenisRuang', TRUE),
					'kodeRuang' => $this->input->post('kodeRuang', TRUE),
					'namaRuang' => $this->input->post('namaRuang', TRUE),
					'pengelola' => $this->input->post('pengelola', TRUE),
				];
			} else {
				$data = [
					'jenisRuang' => $this->input->post('jenisRuang', TRUE),
					'kodeRuang' => $this->input->post('kodeRuang', TRUE),
					'namaRuang' => $this->input->post('namaRuang', TRUE),
					'pengelola' => $this->input->post('pengelola', TRUE),
					'detailLabo' => $this->input->post('detailLab', TRUE),
				];
			}

			$tambah = $this->m_tambah->ruang($data);
			if ($tambah) {
				$this->session->set_flashdata('success', 'Tambah data berhasil');
				redirect('admin/ruang','refresh');
			} else {
				$this->session->set_flashdata('error', 'Tambah data gagal');
				redirect('admin/ruang','refresh');
			}
		}
	}

	function gtk()
	{
		$this->form_validation->set_rules('identitas', 'Identitas', 'trim|required|numeric|is_unique[tb_pengguna.identitas]',
			['numeric' => "Identitas GTK harus berupa angka", 'is_unique' => 'Nomor identitas sudah digunakan']
		);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', 
			['required' => 'Nama GTK tidak boleh kosong']
		);
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Tambah data gagal, '.validation_errors());
			redirect('admin/gtk','refresh');
		} else {
			$data = [
				'identitas' => $this->input->post('identitas', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'xuser' => $this->input->post('xuser', TRUE),
				'xpass' => password_hash($this->input->post('xpass'), PASSWORD_DEFAULT),
				'level' => $this->input->post('level', TRUE),
			];

			$tambah = $this->m_tambah->gtk($data);
			if ($tambah) {
				$this->session->set_flashdata('success', 'Tambah data berhasil');
				redirect('admin/gtk','refresh');
			} else {
				$this->session->set_flashdata('error', 'Tambah data gagal');
				redirect('admin/gtk','refresh');
			}
		}

	}

	function barangsnp()
	{
		$detailLab = $this->input->post('detailLab');
		if ($detailLab == '') {
			$data = [
				'jenisRuangan' => $this->input->post('jenisRuang', TRUE),
				'kodeBarang' => $this->input->post('kodeBarang', TRUE),
				'namaBarang' => $this->input->post('namaBarang', TRUE),
			];
		} else {
			$data = [
				'jenisRuangan' => $this->input->post('jenisRuang', TRUE),
				'detailLab' => $this->input->post('detailLab', TRUE),
				'kodeBarang' => $this->input->post('kodeBarang', TRUE),
				'namaBarang' => $this->input->post('namaBarang', TRUE),
			];
		}
		
		$tambah = $this->m_tambah->barangsnp('tb_snp',$data);

		if ($tambah) {
			$this->session->set_flashdata('success', 'Tambah data berhasil');
			redirect('admin/snp','refresh');
		} else {
			$this->session->set_flashdata('error', 'Tambah data gagal');
			redirect('admin/snp','refresh');
		}
	} 

	function barangnonsnp()
	{
		$detailKelas = $this->input->post('detail-kls');
		$detailLab = $this->input->post('detailLab');
		if ($detailLab == '' && $detailKelas == '') {
			$ada = $this->db->get_where('tb_datarekap', ['jenisRuangan' => $this->input->post('jenisRuang')])->num_rows();

			if ($ada > 0) {
				$data = [
					'jenisRuangan' => $this->input->post('jenisRuang', TRUE),
					'kodeBarang' => $this->input->post('kodeBarang', TRUE),
					'namaBarang' => $this->input->post('namaBarang', TRUE),
					'ceksnp' => '2',
				];

				$tambah = $this->m_tambah->barangnonsnp('tb_datarekap',$data);
			} else {
				$this->session->set_flashdata('error', 'Anda belum diijikan untuk menambah item, lakukan simpan data untuk data snp terlebih dahulu');
				redirect('admin/nonsnp','refresh');
			}

			
		} elseif ($detailKelas !='') {

			$ada = $this->db->get_where('tb_datarekap', ['jenisRuangan' => $this->input->post('jenisRuang'), 'detailKelas' => $detailKelas])->num_rows();

			if ($ada > 0) {
				$data = [
					'jenisRuangan' => $this->input->post('jenisRuang', TRUE),
					'detailKelas' => $detailKelas,
					'kodeBarang' => $this->input->post('kodeBarang', TRUE),
					'namaBarang' => $this->input->post('namaBarang', TRUE),
					'ceksnp' => '2',
				];
				$tambah = $this->m_tambah->barangnonsnp('tb_datarekap',$data);
			} else {
				$this->session->set_flashdata('error', 'Anda belum diijikan untuk menambah item, lakukan simpan data untuk data snp terlebih dahulu');
				redirect('admin/nonsnp','refresh');
			}

		} elseif ($detailLab != '') {
			$ada = $this->db->get_where('tb_datarekap', ['jenisRuangan' => $this->input->post('jenisRuang'), 'detailLab' => $detailLab])->num_rows();

			if ($ada > 0) {
				$data = [
					'jenisRuangan' => $this->input->post('jenisRuang', TRUE),
					'detailLab' => $this->input->post('detailLab', TRUE),
					'kodeBarang' => $this->input->post('kodeBarang', TRUE),
					'namaBarang' => $this->input->post('namaBarang', TRUE),
					'ceksnp' => '2',
				];
				$tambah = $this->m_tambah->barangnonsnp('tb_datarekap',$data);
			} else {
				$this->session->set_flashdata('error', 'Anda belum diijikan untuk menambah item, lakukan simpan data untuk data snp terlebih dahulu');
				redirect('admin/nonsnp','refresh');
			}
			
			
		}
		
		

		if ($tambah) {
			$this->session->set_flashdata('success', 'Tambah data berhasil');
			redirect('admin/nonsnp','refresh');
		} else {
			$this->session->set_flashdata('error', 'Tambah data gagal');
			redirect('admin/nonsnp','refresh');
		}
	} 

	function simpan()
	{
		$namaBarang = $this->input->post('namaBarang');
		$kodeBarang = $this->input->post('kodeBarang');
		$jenisRuangan = $this->input->post('jenisRuangan');
		$detailLab = $this->input->post('detailLab');
		$jmlSemua = $this->input->post('jmlSemua');
		$jmlBaik = $this->input->post('jmlBaik');
		$jmlRskRingan = $this->input->post('jmlRskRingan');
		$jmlRskBerat = $this->input->post('jmlRskBerat');
		$jmlPerlu = $this->input->post('jmlPerlu');
		$jmlSelisih = $this->input->post('jmlSelisih');
		$detailKelas = $this->input->post('detailKelas');
		$ceksnp = $this->input->post('ceksnp');

		if ($jmlSemua) {
			# jika ada data yang diinput
			$data = array();
			for ($i = 0 ; $i < count($jmlSemua); $i++) {
				$tambah = [
					'detailKelas' => $detailKelas,
					'namaBarang' => $namaBarang[$i],
					'kodeBarang' => $kodeBarang[$i],
					'jenisRuangan' => $jenisRuangan,
					'detailLab' => $detailLab,
					'jmlSemua' => $jmlSemua[$i],
					'jmlBaik' => $jmlBaik[$i],
					'jmlRskRingan' => $jmlRskRingan[$i],
					'jmlRskBerat' => $jmlRskBerat[$i],
					'jmlPerlu' => $jmlPerlu[$i],
					'ceksnp' => $ceksnp,

				];

				array_push($data, $tambah);
			}

			$simpandata = $this->db->insert_batch('tb_datarekap', $data);

			if ($simpandata && $detailLab != '') {
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('admin/tampila/'.$jenisRuangan.'/'.$detailLab,'refresh');
			} elseif ($simpandata && $detailKelas != '') {
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('admin/tampilc/'.$jenisRuangan.'/'.$detailKelas,'refresh');
			} elseif ($simpandata && $detailLab == '' && $detailKelas == '') {
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('admin/tampilb/'.$jenisRuangan,'refresh');
			} else {
				$this->session->set_flashdata('error', 'Data gagal disimpan');
				redirect('admin/input','refresh');
			}

		} else {
			# jika tidak ada data diinput
			$this->session->set_flashdata('error', 'Tidak ada data tersimpan');
			redirect('admin/input','refresh');
		}
		


		


	}

	function update()
	{
		$namaBarang = $this->input->post('namaBarang');
		$kodeBarang = $this->input->post('kodeBarang');
		$jenisRuangan = $this->input->post('jenisRuangan');
		$detailLab = $this->input->post('detailLab');
		$jmlSemua = $this->input->post('jmlSemua');
		$jmlBaik = $this->input->post('jmlBaik');
		$jmlRskRingan = $this->input->post('jmlRskRingan');
		$jmlRskBerat = $this->input->post('jmlRskBerat');
		$jmlPerlu = $this->input->post('jmlPerlu');
		$jmlSelisih = $this->input->post('jmlSelisih');
		$detailKelas = $this->input->post('detailKelas');
		$id_ku = $this->input->post('id_ku');

		$data = array();
		for ($i = 0 ; $i < count($jmlSemua); $i++) {
			$tambah = [
				'id_' => $id_ku[$i],
				'namaBarang' => $namaBarang[$i],
				'kodeBarang' => $kodeBarang[$i],
				'jenisRuangan' => $jenisRuangan,
				'detailLab' => $detailLab,
				'jmlSemua' => $jmlSemua[$i],
				'jmlBaik' => $jmlBaik[$i],
				'jmlRskRingan' => $jmlRskRingan[$i],
				'jmlRskBerat' => $jmlRskBerat[$i],
				'jmlPerlu' => $jmlPerlu[$i],
			];

			array_push($data, $tambah);
		}

		$simpandata = $this->db->update_batch('tb_datarekap', $data, 'id_');


		if ($simpandata && $detailLab != '') {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect('admin/tampila/'.$jenisRuangan.'/'.$detailLab,'refresh');
		} elseif ($simpandata && $detailKelas != '') {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect('admin/tampilc/'.$jenisRuangan.'/'.$detailKelas,'refresh');
		} elseif ($simpandata && $detailLab == '' && $detailKelas == '') {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect('admin/tampilb/'.$jenisRuangan,'refresh');
		} else {
			$this->session->set_flashdata('error', 'Data gagal disimpan');
			redirect('admin/input','refresh');
		}


	}

	function usulanBarang()
	{
		$jmlHarga = (($this->input->post('kiraHarga'))*($this->input->post('jmlBarang')));
		$data = [
			'namaBarang' => $this->input->post('namaBarang'),
			'jmlBarang' => $this->input->post('jmlBarang'),
			'kiraHarga' => $this->input->post('kiraHarga'),
			'keperluan' => $this->input->post('keperluan'),
			'id_pengusul' => $this->session->userdata('identitas'),
			'jmlHarga' => $jmlHarga,
		];

		$simpan = $this->m_tambah->usulanBarang($data);

		if ($simpan) {
			$this->session->set_flashdata('success', 'Tambah data berhasil');
			redirect('admin/usul','refresh');
		} else {
			$this->session->set_flashdata('error', 'Tambah data gagal');
			redirect('admin/usul','refresh');
		}
	}

	function pesan()
	{
		$pesan = $this->input->post('pesan', TRUE);
		$id_user = $this->session->userdata('identitas');
		$waktu = date('Y-m-d H:m:s');

		$data = [
			'pesan' => $pesan,
			'id_user' => $id_user,
			'waktu' => $waktu,
		];

		$simpan = $this->m_tambah->pesan('tb_obrolan', $data);

		if ($simpan) {
			redirect('admin','refresh');
		} else {
			redirect('admin','refresh');
		}
		
	}

}

/* End of file Tambah.php */
/* Location: ./application/controllers/Tambah.php */