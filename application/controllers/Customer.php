<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {


	function __construct() {
        parent::__construct();

        $data=$this->session->userdata('logged_in');
    
        if($data['tipe_user'] == "customer")
        {
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
          $this->load->view('templates/v_menu_customer');
          $this->load->view('v_customer_default');
          $this->load->view('templates/v_footer');
        }

        public function daftar_pesanan()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_pesanan');
          $this->load->view('templates/v_footer');
        }

        public function detail_pesanan()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_pesanan_detail');
          $this->load->view('templates/v_footer');
        }

        public function pengaturan_profil()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_pengaturan');
          $this->load->view('templates/v_footer');
        }

        public function saldo()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_saldo');
          $this->load->view('templates/v_footer');
        }

        public function daftar_paket()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_paket');
          $this->load->view('templates/v_footer');
        }

        public function tambah_paket()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_tambah_paket');
          $this->load->view('templates/v_footer');
        }

        public function edit_paket()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_tambah_paket');
          $this->load->view('templates/footer');
        }

        public function del_paket()
        {
          
        }

        public function daftar_ruangan()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_daftar_ruanngan');
          $this->load->view('templates/v_footer');
        }

        public function tambah_ruangan()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_tambah_ruangan');
          $this->load->view('templates/v_footer');
        }

        public function edit_ruangan()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_tambah_ruangan');
          $this->load->view('templates/v_footer');
        }

        public function del_ruangan()
        {

        }

        public function tambah_pesanan_offline()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_pesanan_offline');
          $this->load->view('templates/v_footer');
        }

        public function daftar_testimonial()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_daftar_testimonial');
          $this->load->view('templates/v_footer');
        }

        public function tabel_pesanan()
        {
          $this->load->view('templates/v_menu_studio');
          $this->load->view('v_studio_pesanan');
          $this->load->view('templates/v_footer');
        }
}
