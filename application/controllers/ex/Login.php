<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
	function __construct()
 	{
   		parent::__construct();
 	}
 
 	function index()
 	{

 		if($this->session->userdata('logged_in'))
        {
          redirect('admin', 'refresh');
        }
        else
        {
	        $this->load->helper(array('form'));
   			  $this->load->view('form_login');
        }
 	}
}
?>