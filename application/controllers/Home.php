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
		$this->load->database();
		$this->load->helper('url');
	}
	public function index()
	{
		


		if($this->input->post('addcampus')){
			$cname = $this->input->post('campus_name');
			$cdirector= $this->input->post('campus_director');
			$ceit = $this->input->post('ceit_dean');
			$cas = $this->input->post('cas_dean');
			$cte = $this->input->post('cte_dean');
			$cot = $this->input->post('cot_dean');
			$q = $this->db->query("select * from campuses_tb where campus_name='".$cname."'");
			$row = $q->num_rows();
			if($row){
				$data['error']="<h3 style='color:red'>This user already exists</h3>";
			}else{
				$q=$this->db->query("insert into campuses_tb values('$cname','$cdirector','$ceit','$cas','$cte','$cot')");
				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}
		}
		$this->load->view('nav');
		$this->load->view('campuses', @$data);
		$this->load->view('foot');
	}
	public function departments()
	{
		$this->load->helper('url');

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