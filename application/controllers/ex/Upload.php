<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
    
    private $error;
    private $success;
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('upload_files');

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
    private function handle_error($err) {
        $this->error .= $err . "\r\n";
    }
    private function handle_success($succ) {
        $this->success .= $succ . "\r\n";
    }
    
    public function index() {
        if ($this->input->post('file_upload')) {
            $category = $this->input->post('file_category');

            $config['upload_path'] = './assets/img/portfolio/'.$category.'/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 0;
            $config['max_filename'] = 500;
            $config['encrypt_name'] = TRUE;
            
            $file = array();
            $is_file_error = FALSE;
            
            if (!$_FILES) {
                $is_file_error = TRUE;
                $this->handle_error('Select at least one file.');
            }
            
            if (!$is_file_error) {
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file_name')) {
                    $this->handle_error($this->upload->display_errors());
                    $is_file_error = TRUE;
                } else {
                    $file = $this->upload->data();
                }
            }
            
            if ($is_file_error) {
                if ($file) {
                    $file = './assets/img/portfolio/'.$category.'/' . $file['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            }

            if (!$is_file_error) {
                $resp = $this->upload_files->save_file_info($file,$this->input->post('file_category'));
                if ($resp === TRUE) {
                    $this->handle_success('File was successfully uploaded.');
                } else {
                    $file = './assets/img/portfolio/'.$category.'/' . $file['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                    $this->handle_error('Error while saving file info to Database.');
                }
            }
        }
        
        $data['errors'] = $this->error;
        $data['success'] = $this->success;
        $data['page'] = 'Admin';
        $this->load->view('templates/header_admin',$data);
        $this->load->view('form_produk',$data);
        $this->load->view('templates/footer_admin');
    }
}