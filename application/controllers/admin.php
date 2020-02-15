<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{


	public function index()

	{



		$data['title'] = 'Dashboard Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		echo 'Selamat datang ' . $data['user']['name'];



		$this->load->view('admin/index', $data);


	}


}
