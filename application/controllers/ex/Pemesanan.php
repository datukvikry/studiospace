<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function index()
	{
		$data['page'] = 'Pemesanan';
		$this->load->view('templates/header',$data);
		$this->load->view('pemesanan');
		$this->load->view('templates/footer');
	}
}
