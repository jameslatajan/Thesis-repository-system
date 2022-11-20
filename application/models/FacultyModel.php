<?php
class FacultyModel extends CI_Model
{
    public function getfaculty($campus_name, $department){
        $archive  = 0;
        $query = $this->db->query("SELECT * FROM `faculty_tb` WHERE `archive` = '$archive' AND `department` = '$department' AND `campus_name`= '$campus_name'");
        return $query->result();
    }
    public function insertfaculty($data){
        return $this->db->insert('faculty_tb', $data);
    }
}