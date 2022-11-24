<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SortController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('SortbyModel', 'smodel');
        
    }
    public function searchbyauthor(){
        $data['author'] = $this->smodel->getauthor();

		$this->load->view('includes/nav');
		$this->load->view('Components/Searchby/Author', $data);
		$this->load->view('includes/foot');
    }
    public function searchbyfaculty(){
        $data['faculty'] = $this->smodel->getfaculty();

		$this->load->view('includes/nav');
		$this->load->view('components/Searchby/Faculty', $data);
		$this->load->view('includes/foot');
    }
    public function searchdateissued(){
        $data['issued'] = $this->smodel->dateissued();

		$this->load->view('includes/nav');
		$this->load->view('Components/Searchby/DateIssued', $data);
		$this->load->view('includes/foot');
    }
}