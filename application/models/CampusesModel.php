<?php
class CampusesModel extends CI_Model
{

    public function getcampus()
    {
        $archive  = 0;
        $query = $this->db->get_where('campuses_tb', array('archive' => $archive));
        return $query->result();
    }
    public function insertcampus($data)
    {
        return $this->db->insert('campuses_tb', $data);
    }
    public function editcampus($id)
    {
        $query = $this->db->get_where('campuses_tb', ['campus_id' => $id]);
        return $query->row();
    }
    public function updatecampus($data, $id)
    {
        return $this->db->update('campuses_tb', $data, ['campus_id' => $id]);
    }
    public function archivecampus($id)
    {
        $query = $this->db->get_where('campuses_tb', ['campus_id' => $id]);
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $this->db->query("UPDATE `faculty_tb` SET `archive` = '1' WHERE `campus_name`= '$row->campus_name'");
               
            }
        }else{
            printf('faculty do not exist');
        }
        $this->db->query("UPDATE `campuses_tb` SET `archive` = '1' WHERE `campus_id`= $id");
        

       
    }
}
