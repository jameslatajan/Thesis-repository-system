<?php
class FacultyModel extends CI_Model
{
    public function getfaculty($campus_name, $department)
    {
        $archive  = 0;
        $query = $this->db->query("SELECT * FROM `faculty_tb` WHERE `archive` = '$archive' AND `department` = '$department' AND `campus_name`= '$campus_name'");
        return $query->result();
    }
    public function insertfaculty($data)
    {
        return $this->db->insert('faculty_tb', $data);
    }
    public function archivefaculty($id)
    {
        $this->db->query("UPDATE `faculty_tb` SET `archive` = '1' WHERE `faculty_id`= $id");
    }
    public function editfacultybyid($id)
    {
        $query = $this->db->get_where('faculty_tb', ['faculty_id' => $id]);
        return $query->row();
    }
    public function updatefaculty($data, $id)
    {
        $this->db->update('faculty_tb', $data, ['faculty_id' => $id]);
    }

}
