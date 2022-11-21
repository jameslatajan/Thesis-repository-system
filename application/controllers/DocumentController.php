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
        // if ($this->input->server('REQUEST_METHOD') === 'POST') {


        //     $this->form_validation->set_rules('title', 'Title', 'required');
        //     $this->form_validation->set_rules('author', 'Author', 'required');
        //     $this->form_validation->set_rules('abstract', 'Abstract', 'required');
        //     $this->form_validation->set_rules('issue_date', 'Date issued', 'required');
        //     $this->form_validation->set_rules('file', 'File', 'required');

        //     $fid = $this->input->post('faculty_id');

        //     if ($this->form_validation->run()) {

        //         $config['upload_path']          = './uploads/';
        //         $config['allowed_types']        = 'png|jpeg|excel|sql';

        //         $this->load->library('upload', $config);

        //         if (!$this->upload->do_upload('file')) {
        //             $error = array('error' => $this->upload->display_errors());
        //             print_r($error); 
        //         } else {
        //             $capsule = array(
        //                 'faculty_id' => $this->input->post('faculty_id'),
        //                 'campus_name' => $this->input->post('campus_name'),
        //                 'department' => $this->input->post('department'),
        //                 'faculty_name' => $this->input->post('faculty_name'),
        //                 'title' => $this->input->post('title'),
        //                 'author' => $this->input->post('author'),
        //                 'abstract' => $this->input->post('abstract'),
        //                 'issue_date' => $this->input->post('issue_date'),
        //                 'file' => $this->input->post('file'),
        //             );
        //             // $this->upload->data();
        //             $this->dmodel->insertfile($capsule);
        //             redirect(base_url("showfaculty/" . $fid));
        //             echo "success";
        //         }
        //     } else {
        //         // redirect(base_url("/ceit/".$cid.'/addceit/'.$cid));
        //         // // redirect(current_url());
        //         $this->addfile($fid);
        //         // echo 'ok';
        //     }
        // }

        print_r($_FILES);
    }

    public function downloadfile($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->dmodel->downloadfile($id);
        $file = 'upload/' . $fileinfo['file'];

        echo $file;

        // force_download($file, NULL);
    }
}
