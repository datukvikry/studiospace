<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data['page'] = 'Kontak';
		$this->load->view('templates/header',$data);
		$this->load->view('kontak');
		$this->load->view('templates/footer');
	}
}
