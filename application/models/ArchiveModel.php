<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchiveModel extends CI_Model 
{
    public function getcampus(){
        $archive  = 1;
        $query = $this->db->get_where('campuses_tb', array('archive'=>$archive));
        return $query->result();
    }
    public function getfaculty(){
        $archive  = 1;
        $query = $this->db->get_where('faculty_tb', array('archive'=>$archive));
        return $query->result();
    }
    public function rcampus($id){
        $this->db->query("UPDATE `campuses_tb` SET `archive` = '0' WHERE `campus_id`= $id");
    }
    public function rfaculty($id){
        $this->db->query("UPDATE `faculty_tb` SET `archive` = '0' WHERE `faculty_id`= $id");
    }
}
	