<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CampusesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CampusesModel', 'cmodel');
	}
	public function index()
	{
		$this->load->view('nav');
		$this->load->view('components/AddCampus');
		$this->load->view('foot');
	}
	public function submit()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('campus_name', 'Campus Name', 'required');
			$this->form_validation->set_rules('campus_director', 'Campus Director', 'required');
			$this->form_validation->set_rules('ceit_dean', 'CEIT Dean', 'required');
			$this->form_validation->set_rules('cas_dean', 'CAS Dean', 'required');
			$this->form_validation->set_rules('cte_dean', 'CTE Dean', 'required');
			$this->form_validation->set_rules('cot_dean', 'COT Dean', 'required');

			if ($this->form_validation->run()) {
				$data = [
					'campus_name' => $this->input->post('campus_name'),
					'campus_director' => $this->input->post('campus_director'),
					'ceit_dean' => $this->input->post('ceit_dean'),
					'cas_dean' => $this->input->post('cas_dean'),
					'cte_dean' => $this->input->post('cte_dean'),
					'cot_dean' => $this->input->post('cot_dean'),
				];
				$this->cmodel->insertcampus($data);
				redirect(base_url());

			} else {
				$this->index();
			}

		}
	}
	public function edit($id)
	{
		$data['campus'] = $this->cmodel->editcampus($id);

		$this->load->view('nav');
		$this->load->view('components/EditCampus', $data);
		$this->load->view('foot');
	}

	public function update($id)
	{

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('campus_name', 'Campus Name', 'required');
			$this->form_validation->set_rules('campus_director', 'Campus Director', 'required');
			$this->form_validation->set_rules('ceit_dean', 'CEIT Dean', 'required');
			$this->form_validation->set_rules('cas_dean', 'CAS Dean', 'required');
			$this->form_validation->set_rules('cte_dean', 'CTE Dean', 'required');
			$this->form_validation->set_rules('cot_dean', 'COT Dean', 'required');

			if ($this->form_validation->run()) {
				$data = [
					'campus_name' => $this->input->post('campus_name'),
					'campus_director' => $this->input->post('campus_director'),
					'ceit_dean' => $this->input->post('ceit_dean'),
					'cas_dean' => $this->input->post('cas_dean'),
					'cte_dean' => $this->input->post('cte_dean'),
					'cot_dean' => $this->input->post('cot_dean'),
				];
				$this->cmodel->updatecampus($data, $id);
				redirect(base_url());
			}else{
				$this->edit($id);
			}
		}
	}

	public function archive($id){
		$this->cmodel->archivecampus($id);
		redirect(base_url());
	}



}