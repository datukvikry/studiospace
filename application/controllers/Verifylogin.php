<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  
    $this->load->model('m_user','',TRUE);
  }

  function index()
  {
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

    if($this->form_validation->run() == FALSE)
    {  
      //Field validation failed.  User redirected to login page
          $this->load->view('v_form_login');
    }
    else
    {
      //Go to private area
                
          redirect('verifylogin/cr_id_tipeuser', 'refresh');
          //$sess_data = $this->session->userdata('logged_in');
          //redirect($sess_data['tipe_user'], 'refresh');
    }  

  }
  

  function sess_id_user()
  {
      //    $this->load->model('m_studio');
      // $this->load->model('m_customer');
        
      // $data=$this->session->userdata('logged_in');


      // if($data['tipe_user'] == 'studio'){
  //       $where = array('id_user' => $data['id_user']);
  //       $studio= $this->m_studio->edit_data($where,'studio')->result();

  //       if ($studio) {
  //          foreach($studio as $u){
  //           $get_id_studio = $u->id_studio;
  //         } 
  //         $this->session->set_userdata('get_id_studio', $get_id_studio);   
  //       }
      // }
      // else if($data['tipe_user'] == 'customer'){




      // }


      //  $sess_data = $this->session->userdata('logged_in');

      //       redirect($sess_data['tipe_user'], 'refresh');


    
  }


  function check_database($password)
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