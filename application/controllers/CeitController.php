<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CeitController extends CI_Controller
{
 
    public function __construct()
	{
		parent::__construct();
		$this->load->model('CeitModel','ceitmodel');
        $this->load->model('CampusesModel','cmodel');
	}
    public function index($id = null){
       echo $id;
    }

    public function getceit($id){
        $data['ceit'] = $this->ceitmodel->getceit($id);
        $data['cid'] = $id;
        $this->load->view('nav');   
        $this->load->view('Ceit', $data);
        $this->load->view('foot');
    }
    public function addceit($id){
        $this->load->view('nav');
        $this->load->view('components/AddCeit');
        $this->load->view('foot');  
    }

}