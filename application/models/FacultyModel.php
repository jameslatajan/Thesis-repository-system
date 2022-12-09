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

        $query = $this->db->get_where('faculty_tb', ['faculty_id' => $id]);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $this->db->query("UPDATE `files_tb` SET `archive` = '1' WHERE `faculty_id`= '$row->faculty_id'");
            }
        }
        $this->db->query("UPDATE `faculty_tb` SET `archive` = '1' WHERE `faculty_id`= $id");
    }
    public function numOfFiles($id)
    {
        $test= "";
        $query = $this->db->get_where('faculty_tb', ['faculty_id' => $id]);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $test = $this->db->get_where('files_tb', ['faculty_id' => $row->faculty_id]);
            //     $this->db->query("UPDATE `files_tb` SET `archive` = '1' WHERE `faculty_id`= '$row->faculty_id'");
            }
        }
        return $test->num_rows();

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
