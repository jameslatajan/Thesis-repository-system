<?php
class DocumentModel extends CI_Model
{
    public function getfiles($id)
    {
        $query = $this->db->query("SELECT * FROM `files_tb` WHERE  `faculty_id`= '$id'");
        return $query->result();
    }
    public function addfile($id)
    {
        $query = $this->db->get_where('faculty_tb', ['faculty_id' => $id]);
        return $query->row();
    }
    function insertfile($data)
    {
        return $this->db->insert('files_tb', $data);
    }

    public function downloadfile($id)
    {
        $query = $this->db->get_where('files_tb', array('file_id' => $id));
        return $query->row_array();
    }
}
