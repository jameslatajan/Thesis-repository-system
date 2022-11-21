<?php
defined('BASEPATH') or exit('No direct script access allowed');

class testupload extends CI_Controller
{
    public function index(){
        $this->load->view('includes/nav');
        $this->load->view('components/documents/testupload');
        $this->load->view('includes/foot');
    }

    function upload(){

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('customFile'))
        {
                $error = array('error' => $this->upload->display_errors());

              print_r($error);  // $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                // $this->load->view('upload_success', $data);
                echo 'success';

        }
        
    }

}