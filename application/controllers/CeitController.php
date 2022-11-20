<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CeitController extends CI_Controller
{
 
    public function __construct()
	{
		parent::__construct();
		$this->load->model('CeitModel','ceitm');
	}
    public function index($id){
        $data['ceit'] = $this->ceitm->getceit($id);
        $data['cid'] = $id;
        $this->load->view('includes/nav');   
        $this->load->view('/Ceit', $data);
        $this->load->view('includes/foot');
    }
    public function addceit($id){
        $data['cid'] = $id;

        $this->load->view('includes/nav');
        $this->load->view('components/ceit/AddCeit', $data);
        $this->load->view('includes/foot');  
    }
    public function submitceit(){

        $cid = $this->input->post('campus_id');
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('birth_date', 'Birth date', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact', 'required');
			$this->form_validation->set_rules('position', 'Position', 'required');
			$this->form_validation->set_rules('faculty_name', 'Faculty Name', 'required');

			if ($this->form_validation->run()) {
				$data = [
                    'campus_id'=> $this->input->post('campus_id'),
                    'department'=> $this->input->post('department'),
					'name' => $this->input->post('name'),
					'birth_date' => $this->input->post('birth_date'),
					'address' => $this->input->post('address'),
					'contact_no' => $this->input->post('contact_no'),
					'position' => $this->input->post('position'),
					'faculty_name' => strtoupper($this->input->post('faculty_name')) ,
				];
				$this->ceitm->insertceit($data);
                redirect(base_url("/ceit/".$cid));
				

			} else {
                // redirect(base_url("/ceit/".$cid.'/addceit/'.$cid));
                // // redirect(current_url());
                $this->addceit($cid);
			}

		}
    }

    public function archiveceit($cid, $fid){
		$this->ceitm->archiveceit($fid);
		redirect(base_url("ceit/".$cid));
	}
	public function editceit($id)
	{
		$data['ceit'] = $this->ceitm->editcampus($id);

		$this->load->view('includes/nav');
		$this->load->view('components/ceit/EditCeit', $data);
		$this->load->view('includes/foot');
	}



}