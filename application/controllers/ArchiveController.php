<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ArchiveController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArchiveModel', 'amodel');
        $this->load->library('session');
    }
    public function campus()
    {

        $data['campus'] = $this->amodel->getcampus();

        $this->load->view('includes/nav');
        $this->load->view('Components/archive/Campus', $data);
        $this->load->view('includes/foot');
    }

    public function faculty()
    {

        $data['faculty'] = $this->amodel->getfaculty();

        $this->load->view('includes/nav');
        $this->load->view('Components/archive/Faculty', $data);
        $this->load->view('includes/foot');
    }
    public function restorecampus($id)
    {
        $this->amodel->restorecampus($id);
        $this->session->set_flashdata('alert-success', 'Successfully Restored');
        redirect(base_url("archive/campus"));
    }
    public function restorefaculty($id)
    {
        $this->amodel->restorefaculty($id);
        $this->session->set_flashdata('alert-success', 'Successfully Restored');
        redirect(base_url("archive/faculty"));
    }

    public function deletecampus($id)
    {
        $this->amodel->deletecampus($id);
        $this->session->set_flashdata('alert-danger', 'Successfully Deleted');
        redirect(base_url("archive/campus"));
    }

    public function deletefaculty($id)
    {
        $this->amodel->deletefaculty($id);
        $this->session->set_flashdata('alert-danger', 'Successfully Deleted');
        redirect(base_url("archive/faculty"));
    }
}
