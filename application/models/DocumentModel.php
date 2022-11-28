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
    public function insertfile($data)
    {
        return $this->db->insert('files_tb', $data);
    }
    public function editfile($id)
    {
        $query = $this->db->get_where('files_tb', ['file_id' => $id]);
        return $query->row();
    }

    public function updatefile($data, $id)
    {
        $this->db->update('files_tb', $data, ['file_id' => $id]);
    }

    public function downloadfile($id)
    {
        $query = $this->db->get_where('files_tb', array('file_id' => $id));
        return $query->row_array();
    }
    public function getfilename($id)
    {
        $query = $this->db->get_where('files_tb', array('file_id' => $id));
        return $query->result();
    }
    public function deletefile($id)
    {

       return $this->db->query("DELETE FROM `files_tb` WHERE  `file_id`= '$id'");
        // return $query->row_array();
    }
    public function filedetails($id)
    {

        $query = $this->db->get_where('files_tb', array('file_id' => $id));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                return   $this->db->get_where('faculty_tb', array('faculty_id' => $row->faculty_id));
            }
        }
    }
}
