<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DocumentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DocumentModel', 'dmodel');
        $this->load->helper('download');
        $this->load->helper("file");
        $this->load->library('session');
        $this->load->helper('directory');
    }
    public function addfile($id)
    {
        $data['faculty'] = $this->dmodel->addfile($id);
        $this->load->view('includes/nav');
        $this->load->view('components/documents/Adddocuments', $data);
        $this->load->view('includes/foot');
    }
    public function insertfile($id)
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('abstract', 'Abstract', 'required');
            $this->form_validation->set_rules('issue_date', 'Date issued', 'required');
            // $this->form_validation->set_rules('file', 'File', 'required');

            if ($this->form_validation->run()) {

                $config['upload_path']          = './uploads/documents';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file')) {
                    $error = $this->upload->display_errors('<p class="my-0">', '</p>');
                    $this->session->set_flashdata('alert-file', $error);
                    $this->addfile($id);
                } else {
                    $file_data = $this->upload->data();
                    $capsule = array(
                        'faculty_id' => $this->input->post('faculty_id'),
                        'campus_name' => $this->input->post('campus_name'),
                        'department' => $this->input->post('department'),
                        'faculty_name' => $this->input->post('faculty_name'),
                        'title' => $this->input->post('title'),
                        'author' => $this->input->post('author'),
                        'abstract' => $this->input->post('abstract'),
                        'issue_date' => $this->input->post('issue_date'),
                        'file' => $file_data['file_name'],
                    );
                    $this->session->set_flashdata('alert-success', 'Added Successfully');
                    $this->dmodel->insertfile($capsule);
                    redirect(base_url("showfaculty/" . $id));
                }
            } else {
                // redirect(base_url("/ceit/".$cid.'/addceit/'.$cid));
                // // redirect(current_url());

                $this->addfile($id);
                // echo 'ok';
            }
        }
    }
    public function editfile($id)
    {

        $data['file'] = $this->dmodel->editfile($id);
        $fileinfo = $this->dmodel->downloadfile($id);
        $file = base_url() . '/uploads/documents/' . $fileinfo['file'];
        $data['filepath'] = $file;

        $this->load->view('includes/nav');
        $this->load->view('components/documents/Editdocuments', $data);
        $this->load->view('includes/foot');
    }
    public function updatefile($id)
    {

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('abstract', 'Abstract', 'required');
            $this->form_validation->set_rules('issue_date', 'Date issued', 'required');
            // $this->form_validation->set_rules('file', 'File', 'required');
            $fid = $this->input->post('faculty_id');

            $old_file = $this->input->post('old_file');
            $new_file = $_FILES['file']['name'];
            $update_file = '';

            if ($this->form_validation->run()) {
                if ($new_file == TRUE) {
                    $update_file = $new_file;
                    $config['upload_path']          = './uploads/documents';
                    $config['allowed_types']        = 'gif|jpg|png';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload($update_file)) {
                        if (file_exists("./uploads/documents/" . $old_file)) {
                            unlink("./uploads/documents/" . $old_file);
                        }
                    }
                } else {
                    $update_file = $old_file;
                }

                // print_r($update_file);

                $capsule = [
                    // 'faculty_id' => $this->input->post('faculty_id'),
                    // 'campus_name' => $this->input->post('campus_name'),
                    // 'department' => $this->input->post('department'),
                    // 'faculty_name' => $this->input->post('faculty_name'),
                    'title' => $this->input->post('title'),
                    'author' => $this->input->post('author'),
                    'abstract' => $this->input->post('abstract'),
                    'issue_date' => $this->input->post('issue_date'),
                    'file' =>  $update_file,
                ];
                $this->session->set_flashdata('alert-primary', 'Upadated Successfully');
                $this->dmodel->updatefile($capsule, $id);
                redirect(base_url("showfaculty/" . $fid));
            } else {
                return $this->editfile($id);
            }
        }
    }

    public function downloadfile($id)
    {
        $fileinfo = $this->dmodel->downloadfile($id);
        $file = './uploads/documents/' . $fileinfo['file'];
        force_download($file, NULL);

        // print_r($file);
        // if (file_exists("./uploads/documents/" . $file)) {
        //     force_download($file, NULL);
        // }
        // else{
        //     print_r('file not exist');
        // }

    }
    public function deletefile($id)
    {
        $file = $this->dmodel->getfilename($id);
        // print_r($filename);
        $filename = '';
        foreach ($file as $row) {
            $filename = $row->file;
        }

        if (file_exists("./uploads/documents/".$filename)) {
            unlink("./uploads/documents/" . $filename);
        }
        $this->session->set_flashdata('alert-danger', 'Deleted Successfully');
        $this->dmodel->deletefile($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function filedetails($id)
    {

        // $data['faculty']=$this->dmodel->filedetails($id);
        $data['document'] = $this->dmodel->editfile($id);

        // print_r($data['faculty']);
        // print_r($data['document']);

        $this->load->view('includes/nav');
        $this->load->view('components/documents/ViewDocuments', $data);
        // $this->load->view('components/documents/ViewDocuments');
        $this->load->view('includes/foot');
    }
}
