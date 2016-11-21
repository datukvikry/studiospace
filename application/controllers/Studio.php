<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller {


	function __construct() {
        parent::__construct();

        $data=$this->session->userdata('logged_in');
        $id_studio=$this->session->userdata('get_id_studio');


        if($id_studio){
		
        	$this->load->model('m_studio');
			$this->load->helper('url');

			$data=$this->session->userdata('logged_in');
            $this->load->view('templates/v_header_login',$data);           
     
        }else{
          	//If no session, redirect to login page

          	redirect('login', 'refresh');
        }  
      			
   //      $data=$this->session->userdata('logged_in');
    
   //      if($data['tipe_user'] == "studio")
   //      {
   //      	$this->load->model('m_studio');
			// $this->load->helper('url');

			// $data=$this->session->userdata('logged_in');
   //          $this->load->view('templates/v_header_login',$data);           
   //      }
   //      else
   //      {
   //        	//If no session, redirect to login page
   //        	redirect('login', 'refresh');
   //      }    
    }


	public function index()
	{
		
		$id_studio=$this->session->userdata('get_id_studio');

	   	if($id_studio){
	   		$data['notice'] = '';
	   		
	   	}else{
	   		$data['notice'] = "
	   		Buat Pengaturan! <a href='studio/pengaturan'>Link</a>
	   		";
	   	}

		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_pesanan',$data);
		$this->load->view('templates/v_footer');
	}

	public function pesanan()
	{
		$id_studio=$this->session->userdata('get_id_studio');

	   	if($id_studio){
	   		$data['notice'] = '';
	   		
	   	}else{
	   		$data['notice'] = "
	   		Buat Pengaturan! <a href='studio/pengaturan'>Link</a>
	   		";
	   	}

		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_pesanan',$data);
		$this->load->view('templates/v_footer');
	}

	public function detail_pesanan()
	{
		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_pesanan_detail');
		$this->load->view('templates/v_footer');
	}

	public function pengaturan()
	{
		$x=$this->session->userdata('logged_in');
		$where = array('id_user' => $x['id_user']);
		$data['studio']= $this->m_studio->edit_data($where,'studio')->result();
	
		if($data['studio']){
			redirect('studio/pengaturan_read');
		}else{
			$this->load->view('templates/v_menu_studio');
			$this->load->view('v_studio_pengaturan_input');
			$this->load->view('templates/v_footer');
		}
	}

	public function pengaturan_read(){
		$x=$this->session->userdata('logged_in');
		$where = array('id_user' => $x['id_user']);
		$data['studio']= $this->m_studio->edit_data($where,'studio')->result();
	
		$this->load->view('templates/v_menu_studio');	
		$this->load->view('v_studio_pengaturan',$data);	
		$this->load->view('templates/v_footer');	
	}

	public function pengaturan_input(){

		$data=$this->session->userdata('logged_in');

		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$lokasi = $this->input->post('lokasi');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$p_rek = $this->input->post('p_rek');
		$no_rek = $this->input->post('no_rek');
		

		$data = array(
			'id_user' => $data['id_user'],
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'lokasi' => $lokasi,
			'lat' => $lat,
			'lng' => $lng,
			'p_rek' => $p_rek,
			'no_rek' => $no_rek
			);
		$this->m_studio->input_data($data,'studio');

		

		redirect('studio/pengaturan');
	}

	public function pengaturan_edit($id_studio){
		$where = array('id_studio' => $id_studio);
		$data['studio'] = $this->m_studio->edit_data($where,'studio')->result();

		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_pengaturan_update',$data);
		$this->load->view('templates/v_footer');	
	}

	public function pengaturan_update(){		
		$id_studio = $this->input->post('id_studio');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$lokasi = $this->input->post('lokasi');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$p_rek = $this->input->post('p_rek');
		$no_rek = $this->input->post('no_rek');


		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'lokasi' => $lokasi,
			'lat' => $lat,
			'lng' => $lng,
			'p_rek' => $p_rek,
			'no_rek' => $no_rek
			);

		$where = array(
			'id_studio' => $id_studio
			);
		$this->m_studio->update_data($where,$data,'studio');
		redirect('studio/pengaturan');
	}

	public function saldo()
	{
		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_saldo');
		$this->load->view('templates/v_footer');
	}

	public function paket()
	{
		$data['paket'] = $this->m_studio->tampil_paket()->result();

		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_paket',$data);
		$this->load->view('templates/v_footer');
	}

	public function paket_input()
	{
		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_paket_input');
		$this->load->view('templates/v_footer');
	}

	public function paket_input_aksi()
	{
		
		$id_studio=$this->session->userdata('get_id_studio');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$rincian = $this->input->post('rincian');
		$info = $this->input->post('info');

		$data = array(
			'id_studio' => $id_studio,		
			'nama' => $nama,
			'harga' => $harga,
			'rincian' => $rincian,
			'info' => $info
			);
		$this->m_studio->input_data($data,'paket');
		redirect('studio/paket');
	}


	public function paket_edit($id_paket){

		//echo $id_paket;
		$where = array('id_paket' => $id_paket);
		$data['paket'] = $this->m_studio->edit_data($where,'paket')->result();

		//  foreach($data['paket'] as $u){ 
		// echo $u->nama;
		// }
		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_paket_update',$data);
		$this->load->view('templates/v_footer');	
	}


	public function paket_update()
	{
		
		$id_paket = $this->input->post('id_paket');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$rincian = $this->input->post('rincian');
		$info = $this->input->post('info');


		$data = array(
			'nama' => $nama,
			'harga' => $harga,
			'rincian' => $rincian,
			'info' => $info
			);

		$where = array(
			'id_paket' => $id_paket
			);
		$this->m_studio->update_data($where,$data,'paket');
		redirect('studio/paket');
	
	}

	public function paket_hapus($id_paket)
	{
		$where = array('id_paket' => $id_paket);
		$this->m_studio->hapus_data($where,'paket');
		redirect('studio/paket');	
	}

	public function ruangan()
	{
		$this->load->view('templates/v_menu_studio');
		$this->load->view('v_studio_ruangan_default');
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
