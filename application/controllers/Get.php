<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

	function ubahRuang()
	{
		$id = $this->input->post('id');
		$data = $this->m_data->ubahRuang('tb_ruang',$id)->result();

		echo json_encode($data);

	}

	function ubahGTK()
	{
		$id = $this->input->post('id');
		$data = $this->m_data->ubahGTK('tb_pengguna',$id)->result();

		echo json_encode($data);

	}

}

/* End of file Get.php */
/* Location: ./application/controllers/Get.php */