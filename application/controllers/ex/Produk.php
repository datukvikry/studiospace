<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->library('form_validation');
        $this->load->model('files');
    }

	public function gantungan_kunci()
	{
		$data['page'] = 'Gantungan Kunci';
		$data['data_get'] = $this->files->view('gantungan_kunci');
		$this->load->view('templates/header',$data);
		$this->load->view('produk',$data);
		$this->load->view('templates/footer_produk');
	}

	public function gelang()
	{
		$data['page'] = 'Gelang';
		$data['data_get'] = $this->files->view('gelang');
		$this->load->view('templates/header',$data);
		$this->load->view('produk',$data);
		$this->load->view('templates/footer_produk');
	}

	public function label()
	{
		$data['page'] = 'Label';
		$data['data_get'] = $this->files->view('label');
		$this->load->view('templates/header',$data);
		$this->load->view('produk',$data);
		$this->load->view('templates/footer_produk');
	}

	public function pembatas_buku()
	{
		$data['page'] = 'Pembatas Buku';
		$data['data_get'] = $this->files->view('pembatas_buku');
		$this->load->view('templates/header',$data);
		$this->load->view('produk',$data);
		$this->load->view('templates/footer_produk');
	}

	public function tatakan_gelas()
	{
		$data['page'] = 'Tatakan Gelas';
		$data['data_get'] = $this->files->view('tatakan_gelas');
		$this->load->view('templates/header',$data);
		$this->load->view('produk',$data);
		$this->load->view('templates/footer_produk');
	}

	public function tempelan_kulkas()
	{
		$data['page'] = 'Tempelan Kulkas';
		$data['data_get'] = $this->files->view('tempelan_kulkas');
		$this->load->view('templates/header',$data);
		$this->load->view('produk',$data);
		$this->load->view('templates/footer_produk');
	}
}
