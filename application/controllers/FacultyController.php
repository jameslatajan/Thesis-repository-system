<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FacultyController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('FacultyModel','fmodel');
        $this->load->model('DocumentModel', 'dmodel');
    }
    public function index($campus, $department){
        
        $campus = str_replace("%20", " ", $campus);

        if($department == 'ceit'){
            $data['title'] = "College of Engineering and Information Technology Faculty";
        }
        elseif($department == 'cas'){
            $data['title'] = "College of Arts and Sciences Faculty";
        }
        elseif ($department == 'cte') {
            $data['title'] = "College of Teching Education Faculty";
        }
        elseif ($department == 'cot') {
            $data['title'] = "College of Technology Faculty";
        }
        else{
            $data['title'] = "Error Cant find department Faculty";
        }

        $data['faculty'] = $this->fmodel->getfaculty($campus, $department);
        $data['campus'] = $campus;
        $data['department'] = $department;

        $this->load->view('includes/nav');   
        $this->load->view('/Faculty', $data);
        $this->load->view('includes/foot');
    }

    public function addfaculty($campus, $department){
        
        $campus = str_replace("%20", " ", $campus);
        $data['campus'] = $campus;
        $data['department'] = $department;

        $this->load->view('includes/nav');   
        $this->load->view('components/faculty/AddFaculty', $data);
        $this->load->view('includes/foot');

    }

    public function savefaculty(){

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('birth_date', 'Birth date', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact', 'required');
			$this->form_validation->set_rules('position', 'Position', 'required');
			$this->form_validation->set_rules('faculty_name', 'Faculty Name', 'required');

            $campus_name = $this->input->post('campus_name');
            $department = $this->input->post('department');
			if ($this->form_validation->run()) {
				$data = [
                    'campus_name'=> $this->input->post('campus_name'),
                    'department'=> $this->input->post('department'),
					'name' => $this->input->post('name'),
					'birth_date' => $this->input->post('birth_date'),
					'address' => $this->input->post('address'),
					'contact_no' => $this->input->post('contact_no'),
					'position' => $this->input->post('position'),
					'faculty_name' => strtoupper($this->input->post('faculty_name')) ,
				];
				$this->fmodel->insertfaculty($data);
                redirect(base_url("faculty/".$campus_name.'/'.$department));
				

			} else {
                // redirect(base_url("/ceit/".$cid.'/addceit/'.$cid));
                // // redirect(current_url());
                $this->addfaculty($campus_name, $department);
			}
        }

    }

    public function archivefaculty($campus, $department, $id){

        $this->fmodel->archivefaculty($id);
		redirect(base_url("faculty/".$campus.'/'.$department));
    }
    public function editfaculty($id)
	{
		$data['faculty'] = $this->fmodel->editfacultybyid($id);

		$this->load->view('includes/nav');
		$this->load->view('components/faculty/EditFaculty', $data);
		$this->load->view('includes/foot');
	}
    public function updatefaculty($id){
        

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('birth_date', 'Birth date', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('contact_no', 'Contact', 'required');
			$this->form_validation->set_rules('position', 'Position', 'required');
			$this->form_validation->set_rules('faculty_name', 'Faculty Name', 'required');

            $campus_name = $this->input->post('campus_name');
            $department = $this->input->post('department');

			if ($this->form_validation->run()) {
				$data = [
					'name' => $this->input->post('name'),
					'birth_date' => $this->input->post('birth_date'),
					'address' => $this->input->post('address'),
					'contact_no' => $this->input->post('contact_no'),
					'position' => $this->input->post('position'),
					'faculty_name' => strtoupper($this->input->post('faculty_name')) ,
				];
				$this->fmodel->updatefaculty($data, $id);
                redirect(base_url("faculty/".$campus_name.'/'.$department));
				

			} else {
                $this->editfaculty($id);
			}
        }
    }

    public function showfaculty($id){

        //retrieving files
        $data['files'] = $this->dmodel->getfiles($id);
        $data['faculty'] = $this->fmodel->editfacultybyid($id);

        $this->load->view('includes/nav');   
        $this->load->view('components/faculty/ShowFaculty', $data);
        $this->load->view('components/documents/ShowDocuments', $data);
        $this->load->view('includes/foot');
    }

}