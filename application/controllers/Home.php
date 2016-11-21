<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
         
    }


	public function index()
	{	
		
		if($this->session->userdata('logged_in'))
        {        
           $data = $this->session->userdata('logged_in');
           $this->load->view('templates/v_header_login',$data);     
           $this->load->view('v_home_default');
			$this->load->view('templates/v_footer'); 
        }
        else
        {
          //If no session, redirect to login page
        $this->load->view('templates/v_header');
		$this->load->view('v_home_default');
		$this->load->view('templates/v_footer');
        }
	}
}
