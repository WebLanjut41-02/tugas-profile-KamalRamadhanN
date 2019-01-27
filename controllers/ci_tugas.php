<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ci_tugas extends CI_Controller {

	public function index($value='home')
	{
		$this->load->view('pages/'.$value);
	}

	public function coment()
	{
		$data['coment']=$this->input->post('message');
		$this->load->view('pages/home', $data);
	}

}

/* End of file ci.php */
/* Location: ./application/controllers/ci.php */

?>