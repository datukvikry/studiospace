<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in'))
        {        
           $data = $this->session->userdata('logged_in');
           $this->load->view('templates/v_header_login',$data);      
        }else{
        	$this->load->view('templates/v_header');  
        }

    }

	public function index()
	{
		$this->load->view('v_page_studio_default');
		$this->load->view('templates/v_footer');
	}

	public function Studio()
	{		    
		$this->load->view('v_page_studio_default');
		$this->load->view('templates/v_footer');
	}

	public function JadwalStudio()
	{
		$this->load->view('v_page_studio_schedule');
		$this->load->view('templates/v_footer');
	}
}
