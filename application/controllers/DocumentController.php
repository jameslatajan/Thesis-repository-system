<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DocumentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DocumentModel', 'dmodel');
    }
    public function addfile($id)
    {
        $data['faculty'] = $this->dmodel->addfile($id);
        $this->load->view('includes/nav');
        $this->load->view('components/documents/Adddocuments', $data);
        $this->load->view('includes/foot');
    }
    public function insertfile()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $fid = $this->input->post('faculty_id');

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('abstract', 'Abstract', 'required');
            $this->form_validation->set_rules('issue_date', 'Date issued', 'required');
            $this->form_validation->set_rules('file', 'File', 'required');

            if ($this->form_validation->run()) {
                $data = [
                    'faculty_id' => $this->input->post('faculty_id'),
                    'campus_name' => $this->input->post('campus_name'),
                    'department' => $this->input->post('department'),
                    'faculty_name' => $this->input->post('faculty_name'),
                    'title' => $this->input->post('title'),
                    'author' => $this->input->post('author'),
                    'abstract' => $this->input->post('abstract'),
                    'issue_date' => $this->input->post('issue_date'),
                    'file' => $this->input->post('file'),
                ];
                $this->dmodel->insertfile($data);
                redirect(base_url("showfaculty/" . $fid));
            } else {
                // redirect(base_url("/ceit/".$cid.'/addceit/'.$cid));
                // // redirect(current_url());
                $this->addfile($fid);
                // echo 'ok';
            }
        }
    }
}
