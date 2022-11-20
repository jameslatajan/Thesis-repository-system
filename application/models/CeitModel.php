<?php
class CeitModel extends CI_Model
{
    public function getceit($id)
    {
        $archive  = 0;
        $query = $this->db->query("SELECT * FROM faculty_tb WHERE `campus_id` = $id AND `archive` = $archive AND `department` = 'ceit'");
        return $query->result();
    }
    public function insertceit($data){
        return $this->db->insert('faculty_tb', $data);
    }
    public function archivecampus($id){
        $this->db->query("UPDATE `faculty_tb` SET `archive` = '1' WHERE `faculty_id`= $id");
    }

}