<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SortController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SortbyModel', 'smodel');
        $this->load->model('FacultyModel', 'fmodel');
    }
    public function searchbyauthor()
    {
        $data['author'] = $this->smodel->getauthor();

        $this->load->view('includes/nav');
        $this->load->view('Components/Searchby/Author', $data);
        $this->load->view('includes/foot');
    }
    public function searchbyfaculty()
    {
        $data['faculty'] = $this->smodel->getfaculty();

        $data['files'] = array();
        foreach ($data['faculty'] as $row) {
            array_push($data['files'], $this->fmodel->numOfFiles($row->faculty_id));
        }

        $this->load->view('includes/nav');
        $this->load->view('components/Searchby/Faculty', $data);
        $this->load->view('includes/foot');
    }
    public function searchdateissued()
    {
        $data['issued'] = $this->smodel->dateissued();

        $this->load->view('includes/nav');
        $this->load->view('Components/Searchby/DateIssued', $data);
        $this->load->view('includes/foot');
    }

    public function editfiles($id)
    {

        $data['file'] = $this->smodel->editfile($id);
        $fileinfo = $this->smodel->downloadfile($id);
        $file = base_url() . '/uploads/documents/' . $fileinfo['file'];
        $data['filepath'] = $file;

        $this->load->view('includes/nav');
        $this->load->view('components/Searchby/EditFiles', $data);
        $this->load->view('includes/foot');
    }
    public function updatefiles($id)
    {

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('abstract', 'Abstract', 'required');
            $this->form_validation->set_rules('issue_date', 'Date issued', 'required');

            $old_file = $this->input->post('old_file');
            $new_file = $_FILES['file']['name'];
            $update_file = "";

            if ($this->form_validation->run()) {
                if ($new_file == TRUE) {

                    $update_file = $_FILES['file']['name'];

                    $config['upload_path']          = './uploads/documents';
                    $config['allowed_types']        = 'gif|jpg|png|pdf';
                    $config['encrypt_name']         = TRUE;

                    $this->load->library('upload', $config);


                    if ($this->upload->do_upload('file')) {
                        if (file_exists("./uploads/documents/" . $old_file)) {
                            unlink("./uploads/documents/" . $old_file);
                        }
                    } else {
                        $error = $this->upload->display_errors('<p class="my-0">', '</p>');
                        $this->session->set_flashdata('alert-file', $error);
                        return $this->editfiles($id);
                    }
                    $update_file = $this->upload->data('file_name');
                } else {
                    $update_file = $old_file;
                }

                print_r($update_file);
                $capsule = [
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
