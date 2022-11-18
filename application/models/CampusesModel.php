<?php
class CampusesModel extends CI_Model
{

    public function getcampus()
    {
        $archive  = 0;
        $query = $this->db->get_where('campuses_tb', array('archive'=>$archive));
        return $query->result();
    }
    public function insertcampus($data)
    {
        return $this->db->insert('campuses_tb', $data);
    }
    public function editcampus($id){
        $query = $this->db->get_where('campuses_tb',['campus_id'=> $id]);
        return $query->row_array();
    }
    public function updatecampus($data, $id){
        $this->db->update('campuses_tb', $data, ['campus_id' => $id]);
    }
    public function archivecampus($id){
        $this->db->query("UPDATE `campuses_tb` SET `archive` = '1' WHERE `campus_id`= $id");
    }

}