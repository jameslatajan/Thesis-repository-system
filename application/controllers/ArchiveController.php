<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ArchiveController extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('ArchiveModel', 'amodel');
		$this->load->library('session');
	}
    public function campus(){

        $data['campus'] = $this->amodel->getcampus();

        $this->load->view('includes/nav');
		$this->load->view('Components/archive/Campus',$data);
		$this->load->view('includes/foot');
    }

    public function faculty(){

        $data['faculty'] = $this->amodel->getfaculty();

        $this->load->view('includes/nav');
		$this->load->view('Components/archive/Faculty',$data);
		$this->load->view('includes/foot');
    }


}