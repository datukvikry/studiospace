<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in'))
        {        
           $data = $this->session->userdata('logged_in');
           $this->load->view('templates/v_header_login',$data);      
        }
        else
        {
          //If no session, redirect to login page
          redirect('login', 'refresh');
        }

        
  }

	public function index()
	{

		if($this->session->userdata('logged_in'))
        {
          $session_data = $this->session->userdata('logged_in');
          $data['username'] = $session_data['username'];
        }
        else
        {
          	$this->load->view('templates/v_header_login');
			$this->load->view('v_admin_default');
			$this->load->view('templates/v_footer');
        }

		
	}




}
