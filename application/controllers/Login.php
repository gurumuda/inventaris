<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('xuser', 'Username', 'trim|required', 
			[ 'required' => 'Username tidak boleh kosong'
		]);
		$this->form_validation->set_rules('xpass', 'Password', 'trim|required', 
			[ 'required' => 'Password tidak boleh kosong'
		]);
		$this->form_validation->set_error_delimiters('<label style="color:red">', '</label>');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login/meta');
			$this->load->view('login/konten');
			$this->load->view('login/script');

		} else {
			$this->login_();
		}

	}

	private function login_()
	{
		$xuser = $this->input->post('xuser', TRUE);
		$xpass = $this->input->post('xpass', TRUE);

		$data = $this->db->get_where('tb_pengguna', ['xuser' => $xuser])->row_array();

		if ($data) {
			if (password_verify($xpass, $data['xpass'])) {

				if ($data['status'] == '1') {
					$array = array(
						'nama' => $data['nama'],
						'user' => $data['xuser'],
						'level' => $data['level'],
						'identitas' => $data['identitas'],
					);

					$this->session->set_userdata( $array );

					redirect('admin','refresh');
				} else {
					$this->session->set_flashdata('error', 'Akun dinonaktivkan, silahkan hubungi administrator');
					redirect('','refresh');
				}
				
			} else {
				$this->session->set_flashdata('error', 'Username atau Password tidak dikenal');
				redirect('','refresh');
			}
			
		} else {
			$this->session->set_flashdata('error', 'Username tidak dikenal');
			redirect('','refresh');
		}
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('','refresh');
	}



}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */