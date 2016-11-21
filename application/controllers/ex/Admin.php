<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        //$this->load->library('form_validation');
        //$this->load->model('files');

        if($this->session->userdata('logged_in'))
        {
          $session_data = $this->session->userdata('logged_in');
          $data['username'] = $session_data['username'];
        }
        else
        {
          //If no session, redirect to login page
          redirect('login', 'refresh');
        }
    }

	public function index()
	{
		$data['page'] = 'Admin';
		$this->load->view('templates/header_admin',$data);
		$this->load->view('home_admin');
		$this->load->view('templates/footer_admin');
	}

	public function gantungan_kunci()
	{
		$data['page'] 	  = 'Admin';
		$data['category'] = "Gantungan Kunci";
		$data['link_btn'] = "gantungan_kunci";
		$data['data_get'] = $this->files->view('gantungan_kunci');
		$this->load->view('templates/header_admin',$data);
		$this->load->view('list_produk',$data);
		$this->load->view('templates/footer_admin');
	}

	public function gelang()
	{
		$data['page'] 	  = 'Admin';
		$data['category'] = "Gelang";
		$data['link_btn'] = "gelang";
		$data['data_get'] = $this->files->view('gelang');
		$this->load->view('templates/header_admin',$data);
		$this->load->view('list_produk',$data);
		$this->load->view('templates/footer_admin');
	}

	public function label()
	{
		$data['page'] 	  = 'Admin';
		$data['category'] = "Label";
		$data['link_btn'] = "label";
		$data['data_get'] = $this->files->view('label');
		$this->load->view('templates/header_admin',$data);
		$this->load->view('list_produk',$data);
		$this->load->view('templates/footer_admin');
	}

	public function pembatas_buku()
	{
		$data['page'] 	  = 'Admin';
		$data['category'] = "Pembatas Buku";
		$data['link_btn'] = "pembatas_buku";
		$data['data_get'] = $this->files->view('pembatas_buku');
		$this->load->view('templates/header_admin',$data);
		$this->load->view('list_produk',$data);
		$this->load->view('templates/footer_admin');
	}

	public function tatakan_gelas()
	{
		$data['page']     = 'Admin';
		$data['category'] = "Tatakan Gelas";
		$data['link_btn'] = "tatakan_gelas";
		$data['data_get'] = $this->files->view('tatakan_gelas');
		$this->load->view('templates/header_admin',$data);
		$this->load->view('list_produk',$data);
		$this->load->view('templates/footer_admin');
	}

	public function tempelan_kulkas()
	{
		$data['page'] 	  = 'Admin';
		$data['category'] = "Tempelan Kulkas";
		$data['link_btn'] = "tempelan_kulkas";
		$data['data_get'] = $this->files->view('tempelan_kulkas');
		$this->load->view('templates/header_admin',$data);
		$this->load->view('list_produk',$data);
		$this->load->view('templates/footer_admin');
	}

	public function delete()
	{
		$file_id = $this->uri->segment(3);
		$row = $this->files->get($file_id);
		$file = './assets/img/portfolio/'. $row->file_category .'/' . $row->file_name;
        if (file_exists($file)) {
            unlink($file);
        }
		$this->files->delete($file_id);
		redirect('admin/'. $row->file_category);
	}

	public function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('login', 'refresh');
	}

}
