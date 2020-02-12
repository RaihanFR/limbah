<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller 
{


	public function index()

	{


		$data['title'] = 'Dashboard Admin';
		echo 'Selamat datang ' . $data['user']['name'];



		$this->load->view('data/data', $data);


	}


}