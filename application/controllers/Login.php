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
            $sess_data = $this->session->userdata('logged_in');
            redirect($sess_data['tipe_user'], 'refresh');    
        }
        else
        {
  	        $this->load->helper(array('form'));
     			  $this->load->view('v_form_login');
        }
 	}



  function login_sukses()
  {
  //     $this->load->model('m_studio');
  //     $this->load->model('m_customer');
        
  //     $data=$this->session->userdata('logged_in');


  //     if($data['tipe_user'] == 'studio'){
  //           $where = array('id_user' => $data['id_user']);
  //           $studio= $this->m_studio->edit_data($where,'studio')->result();

  //           if ($studio) {
  //              foreach($studio as $u){
  //               $get_id_studio = $u->id_studio;
  //             } 
  //             $this->session->set_userdata('get_id_studio', $get_id_studio);   
  //           }
  //     }
  //     else if($data['tipe_user'] == 'customer'){


  //     }


  //      $sess_data = $this->session->userdata('logged_in');

  //           redirect($sess_data['tipe_user'], 'refresh');

  }


    

  public function logout()
  {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('login', 'refresh');
  }

}
?>



