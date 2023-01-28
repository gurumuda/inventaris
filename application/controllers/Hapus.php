<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus extends CI_Controller {

	function ruang()
	{
		$xpass = $this->input->post('xPass');
		$id = $this->input->post('id');

		if ($xpass == '') {
			$this->session->set_flashdata('error', 'Password tidak boleh kosong');
			redirect('admin/ruang','refresh');
		} else {
			if (password_verify($xpass, $this->db->get_where('tb_pengguna',['xuser' => $this->session->userdata('user')])->row_array()['xpass'])) {

				$hapus = $this->m_hapus->ruang($id);

				if ($hapus) {
					$this->session->set_flashdata('success', 'Data ruang berhasil dihapus');
					redirect('admin/ruang','refresh');
				} else {
					$this->session->set_flashdata('error', 'Data ruang gagal dihapus');
					redirect('admin/ruang','refresh');
				}


			} else {
				$this->session->set_flashdata('error', 'Password tidak cocok');
				redirect('admin/ruang','refresh');
			}
		}

	}

	function gtk()
	{
		$xpass = $this->input->post('xPass');
		$id = $this->input->post('id');

		if ($xpass == '') {
			$this->session->set_flashdata('error', 'Password tidak boleh kosong');
			redirect('admin/gtk','refresh');
		} else {
			if (password_verify($xpass, $this->db->get_where('tb_pengguna',['xuser' => $this->session->userdata('user')])->row_array()['xpass'])) {

				$hapus = $this->m_hapus->gtk($id);

				if ($hapus) {
					$this->session->set_flashdata('success', 'Data GTK berhasil dihapus');
					redirect('admin/gtk','refresh');
				} else {
					$this->session->set_flashdata('error', 'Data GTK gagal dihapus');
					redirect('admin/gtk','refresh');
				}


			} else {
				$this->session->set_flashdata('error', 'Password tidak cocok');
				redirect('admin/gtk','refresh');
			}
		}

	}

	function semuaRuang()
	{
		$xpass = $this->input->post('xPass');

		if ($xpass == '') {
			$this->session->set_flashdata('error', 'Password tidak boleh kosong');
			redirect('admin/ruang','refresh');
		} else {
			if (password_verify($xpass, $this->db->get_where('tb_pengguna',['xuser' => $this->session->userdata('user')])->row_array()['xpass'])) {

				$hapus = $this->m_hapus->semuaRuang();

				if ($hapus) {
					$this->session->set_flashdata('success', 'Data ruang berhasil dihapus');
					redirect('admin/ruang','refresh');
				} else {
					$this->session->set_flashdata('error', 'Data ruang gagal dihapus');
					redirect('admin/ruang','refresh');
				}


			} else {
				$this->session->set_flashdata('error', 'Password tidak cocok');
				redirect('admin/kelas','refresh');
			}
		}

	}

	function semuaGTK()
	{
		$xpass = $this->input->post('xPass');

		if ($xpass == '') {
			$this->session->set_flashdata('error', 'Password tidak boleh kosong');
			redirect('admin/gtk','refresh');
		} else {
			if (password_verify($xpass, $this->db->get_where('tb_pengguna',['xuser' => $this->session->userdata('user')])->row_array()['xpass'])) {

				$hapus = $this->m_hapus->semuaGTK();

				if ($hapus) {
					$this->session->set_flashdata('success', 'Data gtk berhasil dihapus');
					redirect('admin/gtk','refresh');
				} else {
					$this->session->set_flashdata('error', 'Data gtk gagal dihapus');
					redirect('admin/gtk','refresh');
				}


			} else {
				$this->session->set_flashdata('error', 'Password tidak cocok');
				redirect('admin/gtk','refresh');
			}
		}

	}

	function barangsnp($id)
	{
		$this->db->where('id_', $id);
		$hapus = $this->db->delete('tb_snp');

		if ($hapus) {
			$this->session->set_flashdata('success', 'Data barang berhasil dihapus');
			redirect('admin/snp','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data barang gagal dihapus');
			redirect('admin/snp','refresh');
		}
	}

	function usulan($id)
	{
		$this->db->where('id_', $id);
		$hapus = $this->db->delete('tb_usulan');

		if ($hapus) {
			$this->session->set_flashdata('success', 'Data usulan barang berhasil dihapus');
			redirect('admin/usul','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data usulan barang gagal dihapus');
			redirect('admin/usul','refresh');
		}
	}

	function barangnonsnp($id)
	{
		$this->db->where('id_', $id);
		$hapus = $this->db->delete('tb_datarekap');

		if ($hapus) {
			$this->session->set_flashdata('success', 'Data barang berhasil dihapus');
			redirect('admin/nonsnp','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data barang gagal dihapus');
			redirect('admin/nonsnp','refresh');
		}
	}

	function semuaBarang()
	{
		$xpass = $this->input->post('xPass');

		if ($xpass == '') {
			$this->session->set_flashdata('error', 'Password tidak boleh kosong');
			redirect('admin/snp','refresh');
		} else {
			if (password_verify($xpass, $this->db->get_where('tb_pengguna',['xuser' => $this->session->userdata('user')])->row_array()['xpass'])) {

				$hapus = $this->m_hapus->semuaBarang();

				if ($hapus) {
					$this->session->set_flashdata('success', 'Data barang berhasil dihapus');
					redirect('admin/snp','refresh');
				} else {
					$this->session->set_flashdata('error', 'Data barang gagal dihapus');
					redirect('admin/snp','refresh');
				}


			} else {
				$this->session->set_flashdata('error', 'Password tidak cocok');
				redirect('admin/snp','refresh');
			}
		}

	}

	function semuaBarangnon()
	{
		$xpass = $this->input->post('xPass');

		if ($xpass == '') {
			$this->session->set_flashdata('error', 'Password tidak boleh kosong');
			redirect('admin/nonsnp','refresh');
		} else {
			if (password_verify($xpass, $this->db->get_where('tb_pengguna',['xuser' => $this->session->userdata('user')])->row_array()['xpass'])) {

				$hapus = $this->m_hapus->semuaBarangnon();

				if ($hapus) {
					$this->session->set_flashdata('success', 'Data barang berhasil dihapus');
					redirect('admin/nonsnp','refresh');
				} else {
					$this->session->set_flashdata('error', 'Data barang gagal dihapus');
					redirect('admin/nonsnp','refresh');
				}


			} else {
				$this->session->set_flashdata('error', 'Password tidak cocok');
				redirect('admin/nonsnp','refresh');
			}
		}

	}

}

/* End of file Hapus.php */
/* Location: ./application/controllers/Hapus.php */