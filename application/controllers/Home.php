<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CampusesModel','cmodel');
	}
	public function index()
	{
		$data['campus'] = $this->cmodel->getcampus();

		$this->load->view('nav');
		$this->load->view('Campuses', $data);
		$this->load->view('foot');
	}
	public function departments()
	{

		$this->load->view('nav');
		$this->load->view('Departments');
		$this->load->view('foot');
	}
	public function faculty()
	{
		$this->load->helper('url');

		$this->load->view('nav');
		$this->load->view('Faculty');
		$this->load->view('foot');
	}
	public function facultymem()
	{

		$this->load->helper('url');

		$this->load->view('nav');
		$this->load->view('FacultyMember');
		$this->load->view('foot');
	}

}