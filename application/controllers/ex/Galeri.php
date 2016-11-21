<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data['page'] = 'Galeri';
		$this->load->view('templates/header',$data);
		$this->load->view('galeri');
		$this->load->view('templates/footer');
	}
}
