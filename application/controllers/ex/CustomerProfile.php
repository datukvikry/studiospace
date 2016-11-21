<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerProfile extends CI_Controller {

	public function index()
	{
		$data['page'] = 'CustomerProfile';
		$this->load->view('templates/header',$data);
		$this->load->view('customerprofile');
		$this->load->view('templates/footer');
	}
}
