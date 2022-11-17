<?php
class CampusesModel extends CI_Model
{

    public function getcampus()
    {
        $query = $this->db->get('campuses_tb');
        return $query->result();
    }
    public function insertcampus($data)
    {
        return $this->db->insert('campuses_tb', $data);
    }
    public function editcampus($id){
        $query = $this->db->get_where('campuses_tb',['campus_id'=> $id]);
        return $query->row();
    }

}