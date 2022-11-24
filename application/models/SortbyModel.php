<?php
class SortbyModel extends CI_Model
{
    public function getauthor()
    {
        $query = $this->db->query("SELECT * FROM `files_tb`");
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
        $query = $this->db->query("SELECT * FROM `files_tb` ");
        return $query->result();
    }
}