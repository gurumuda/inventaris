<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah extends CI_Controller {

	function ruang()
	{
		$id = $this->input->post('idRuang');
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
				'detailLabo' => $detailLab,
			];
		}
		
		$ubah = $this->m_ubah->ubahRuang('tb_ruang',$id,$data);

		if ($ubah) {
			$this->session->set_flashdata('success', 'Ubah data berhasil');
			redirect('admin/ruang','refresh');
		} else {
			$this->session->set_flashdata('error', 'Ubah data gagal');
			redirect('admin/ruang','refresh');
		}
	}

	function gtk()
	{
		$id = $this->input->post('idGTK');
		$xpass = $this->input->post('xPass');

		if ($xpass == '') {
			$data = [
				'identitas' => $this->input->post('identitas', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'xuser' => $this->input->post('xuser', TRUE),
				'level' => $this->input->post('level', TRUE),
			];
		} else {
			$data = [
				'identitas' => $this->input->post('identitas', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'xuser' => $this->input->post('xuser', TRUE),
				'level' => $this->input->post('level', TRUE),
				'xpass' => password_hash($this->input->post('xpass', TRUE), PASSWORD_DEFAULT),

			];
		}
		

		$ubah = $this->m_ubah->ubahGTK('tb_pengguna',$id,$data);

		if ($ubah) {
			$this->session->set_flashdata('success', 'Ubah data berhasil');
			redirect('admin/gtk','refresh');
		} else {
			$this->session->set_flashdata('error', 'Ubah data gagal');
			redirect('admin/gtk','refresh');
		}
	}

	function statusgtk($id)
	{
		$status = $this->db->get_where('tb_pengguna',['id_' => $id])->row_array()['status'];

		if ($status == '1') {
			$data = [
				'status' => '0',
			];
		} else {
			$data = [
				'status' => '1',
			];
		}

		$ubah = $this->m_ubah->statusgtk('tb_pengguna', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('success', 'Ubah status berhasil');
			redirect('admin/gtk','refresh');
		} else {
			$this->session->set_flashdata('error', 'Ubah status gagal');
			redirect('admin/gtk','refresh');
		}
	}

	function profile()
	{
		$id_ = $this->input->post('id');
		$pass = $this->input->post('password');

		if ($pass !='') {
			$xpass = password_hash($pass, PASSWORD_DEFAULT);

			$data = [
				'nama' => $this->input->post('namaLengkap'),
				'identitas' => $this->input->post('identitas'),
				'xuser' => $this->input->post('username'),
				'xpass' => $xpass,
			];

		} elseif ($pass == '') {
			$data = [
				'nama' => $this->input->post('namaLengkap'),
				'identitas' => $this->input->post('identitas'),
				'xuser' => $this->input->post('username'),
			];
		}

		$ubah = $this->m_ubah->profile('tb_pengguna', $id_, $data);

		if ($ubah) {
			$pengelola = $this->input->post('identitas');
			$x = ['pengelola' => $pengelola];
			$change = $this->m_ubah->pengelolaruang('tb_ruang', $x ,$pengelola);

			if ($change) {
				$this->session->set_flashdata('success', 'Ubah data personal berhasil');
				redirect('admin/profile','refresh');
			} else {
				$this->session->set_flashdata('error', 'Ubah data personal berhasil, namun anda perlu menghubungi administrator untuk mengubah data penanggung jawab ruang');
				redirect('admin/profile','refresh');
			}
			
		} else {
			$this->session->set_flashdata('error', 'Ubah data personal gagal');
			redirect('admin/profile','refresh');
		}

		
	}

	function tolak($id_) 
	{
		$object = ['status' => '0'];
		$this->db->where('id_', $id_);
		$ubah = $this->db->update('tb_usulan', $object);

		if ($ubah) {
			$this->session->set_flashdata('success', 'Ubah status berhasil');
			redirect('admin/kelolausul','refresh');
		} else {
			$this->session->set_flashdata('error', 'Ubah status gagal');
			redirect('admin/kelolausul','refresh');
		}
	}

	function setuju($id_) 
	{
		$object = ['status' => '3'];
		$this->db->where('id_', $id_);
		$ubah = $this->db->update('tb_usulan', $object);

		if ($ubah) {
			$this->session->set_flashdata('success', 'Ubah status berhasil');
			redirect('admin/kelolausul','refresh');
		} else {
			$this->session->set_flashdata('error', 'Ubah status gagal');
			redirect('admin/kelolausul','refresh');
		}
	}

	function cek()
	{
		$setuju = $this->input->post('setuju'); // tombol setuju
		$tolak = $this->input->post('tolak'); // tombol tolak
		$reset = $this->input->post('reset'); // tombol reset
		$rekom = $this->input->post('rekom'); // tombol reset


		$cek = $this->input->post('cek');

		if ($cek) {
			if (isset($setuju)) {
				# jika tombol setuju ditekan
				$object = ['status' => '3'];
				$i = 0;
				foreach ($cek as $key) {
					$id_ = $key;
					$i++;
					$ubah = $this->m_ubah->cek($object, $id_);
				}
			} elseif (isset($tolak)) {
				# jika tombol tolak ditekan
				$object = ['status' => '0'];
				$i = 0;
				foreach ($cek as $kei) {
					$id_ = $kei;
					$i++;
					$ubah = $this->m_ubah->cek($object, $id_);
				}
			} elseif (isset($reset)) {
				# jika tombol tolak ditekan
				$object = ['status' => '1'];
				$i = 0;
				foreach ($cek as $ke) {
					$id_ = $ke;
					$i++;
					$ubah = $this->m_ubah->cek($object, $id_);
				}
			} elseif (isset($rekom)) {
				# jika tombol tolak ditekan
				$object = ['status' => '2'];
				$i = 0;
				foreach ($cek as $kes) {
					$id_ = $kes;
					$i++;
					$ubah = $this->m_ubah->cek($object, $id_);
				}
			}
			
		} else {
			# jika tidak ada data dicentang
			$this->session->set_flashdata('error', 'Tidak ada data terpilih');
			redirect('admin/kelolausul','refresh');
		}
		
		if ($ubah) {
			$this->session->set_flashdata('success', 'Ubah status berhasil');
			redirect('admin/kelolausul','refresh');
		} else {
			$this->session->set_flashdata('error', 'Ubah status gagal');
			redirect('admin/kelolausul','refresh');
		}
		
		

		
		// echo "<pre>";
		// echo(count($cek));
		// echo "</pre>";


	}

}

/* End of file Ubah.php */
/* Location: ./application/controllers/Ubah.php */