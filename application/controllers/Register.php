<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_register');
	}

	public function index()
	{
		$this->load->view('v_form_registrasi');
	}


	public function tambah_aksi()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tipe_user = $this->input->post('tipe_user');
 			
 		$where = array('email' => $email);
		$data['email']= $this->m_register->cek($where,'user')->result();

		if($data['email']){
			echo "Email Sudah Terdaftar";
			$this->load->view('v_form_registrasi');
		}else{

			if($tipe_user=="1"){
			$data = array(
			'email' => $email,
			'password' => md5($password),
			'tipe_user' => "customer"
			);
			$this->m_register->input_data($data,'user');
			
			}else if($tipe_user=="2") {
			$data = array(
			'email' => $email,                                           
			'password' => md5($password),
			'tipe_user' => "studio"
			);
			$this->m_register->input_data($data,'user');	
	
		}
			//echo "Registrasi berhasil.. Silahkan login";

			redirect('login');
		}

	}

	function cr_id_user()
	{
	      $this->load->model('m_studio');
	      $this->load->model('m_customer');
	      $x=$this->session->userdata('logged_in');

	      // echo $x['tipe_user'];
	      // $this->load->view('errors/default_error');

	     if($x['tipe_user'] == 'studio'){
	      
	        //echo $x['id_user'];
	        $data = array(
	          'id_user' => $x['id_user']
	          );
	        $this->m_studio->input_data($data,'studio');

	      }else if($x['tipe_user'] == 'customer'){

	        //echo $x['id_user'];
	        $data = array(
	          'id_user' => $x['id_user']
	          );
	        $this->m_customer->input_data($data,'customer');

	      }
	    //redirect('home');
	 }


	 function check_email($email)
	  {
	    //Field validation succeeded.  Validate against database
	    $email = $this->input->post('email');

	    //query the database
	    $result = $this->m_user->login($email, $password);

	    if($result)
	    {
	      $sess_array = array();
	      foreach($result as $row)
	      {
	        $sess_array = array(
	          'id_user' => $row->id_user,
	          'email' => $row->email,
	          'tipe_user' => $row->tipe_user
	        );
	        $this->session->set_userdata('logged_in', $sess_array);
	      }
	      return TRUE;
	    }
	    else
	    {
	      $this->form_validation->set_message('check_database', 'Invalid Email or Password');
	      return false;
	    }
	  }

}
?>