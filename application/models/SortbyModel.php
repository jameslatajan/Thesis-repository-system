<?php
class SortbyModel extends CI_Model
{
    public function getauthor()
    {
        $archive = 0;
        $query = $this->db->query("SELECT * FROM `files_tb` WHERE `archive` = '$archive'");
        return $query->result();
    }
    public function getfaculty()
    {
        $archive = 0;
        $query = $this->db->query("SELECT * FROM `faculty_tb`WHERE `archive` = '$archive' ");
        return $query->result();
    }
    public function dateissued()
    {
        $archive = 0;
        $query = $this->db->query("SELECT * FROM `files_tb` WHERE `archive` = '$archive'");
        return $query->result();
    }
    public function editfile($id){
        $query = $this->db->get_where('files_tb', ['file_id' => $id]);
        return $query->row();
    }
    public function updatefile($data, $id){
        $this->db->update('files_tb', $data, ['file_id' => $id]);
    }
    public function downloadfile($id)
    {
        $query = $this->db->get_where('files_tb', array('file_id' => $id));
        return $query->row_array();
    }
}