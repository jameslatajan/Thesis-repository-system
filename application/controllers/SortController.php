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

    public function editfiles($id){

        $data['file'] = $this->smodel->editfile($id);
        $fileinfo = $this->smodel->downloadfile($id);
        $file = base_url() . '/uploads/documents/' . $fileinfo['file'];
        $data['filepath'] = $file;

        $this->load->view('includes/nav');
        $this->load->view('components/Searchby/EditFiles', $data);
        $this->load->view('includes/foot');
    }
    public function updatefiles($id){

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('abstract', 'Abstract', 'required');
            $this->form_validation->set_rules('issue_date', 'Date issued', 'required');
            // $this->form_validation->set_rules('file', 'File', 'required');
            // $fid = $this->input->post('faculty_id');

            if ($this->form_validation->run()) {

                $old_file = $this->input->post('old_file');
                $new_file = $_FILES['file']['name'];

                if ($new_file == TRUE) {
                    $update_file = $_FILES['file']['name'];
                    $config['upload_path']          = './uploads/documents';
                    $config['allowed_types']        = 'gif|jpg|png|pdf';

                    $this->load->library('upload', $config);


                    if ($this->upload->do_upload('file')) {
                        if (file_exists("./uploads/documents/" . $old_file)) {
                            unlink("./uploads/documents/" . $old_file);
                        }
                    } else {
                        $update_file = $old_file;
                    }
                }

                $capsule = [
                    // 'faculty_id' => $this->input->post('faculty_id'),
                    // 'campus_name' => $this->input->post('campus_name'),
                    // 'department' => $this->input->post('department'),
                    // 'faculty_name' => $this->input->post('faculty_name'),
                    'title' => $this->input->post('title'),
                    'author' => $this->input->post('author'),
                    'abstract' => $this->input->post('abstract'),
                    'issue_date' => $this->input->post('issue_date'),
                    'file' => $update_file,
                ];
                $this->session->set_flashdata('alert-primary', 'Successfully Updated');
                $this->smodel->updatefile($capsule, $id);
                redirect(base_url("search/author"));
            } else {
                return $this->editfiles($id);
            }
        }
    }
}