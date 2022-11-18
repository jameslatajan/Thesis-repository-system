<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CeitController extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('CeitModel','cmodel');
	}
    public function index($id){
        $data['ceit'] = $this->cmodel->getceit($id);

        $this->load->view('nav');   
        $this->load->view('Ceit', $data);
        $this->load->view('foot');
    }
    public function addceit(){
        
        $this->load->view('nav');
        $this->load->view('components/Addceit');
        $this->load->view('foot');  
    }

}