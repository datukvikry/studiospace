<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$data['page'] = 'Search';
		$this->load->view('templates/header',$data);
		$this->load->view('search_result');
		$this->load->view('templates/footer');
	}
}
