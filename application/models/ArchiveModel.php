<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchiveModel extends CI_Model
{
    public function getcampus()
    {
        $archive  = 1;
        $query = $this->db->get_where('campuses_tb', array('archive' => $archive));
        return $query->result();
    }
    public function getfaculty()
    {
        $archive  = 1;
        $query = $this->db->get_where('faculty_tb', array('archive' => $archive));
        return $query->result();
    }
    public function rcampus($id)
    {
        $this->db->query("UPDATE `campuses_tb` SET `archive` = '0' WHERE `campus_id`= $id");
    }
    public function rfaculty($id)
    {
        $this->db->query("UPDATE `faculty_tb` SET `archive` = '0' WHERE `faculty_id`= $id");
    }

    public function restorecampus($id)
    {
        $query = $this->db->get_where('campuses_tb', ['campus_id' => $id]);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $this->db->query("UPDATE `faculty_tb` SET `archive` = '0' WHERE `campus_name`= '$row->campus_name'");
                $query2 = $this->db->get_where('files_tb', ['campus_name' => $row->campus_name]);
                if ($query2->num_rows() > 0) {
                    foreach ($query2->result() as $row) {
                        $this->db->query("UPDATE `files_tb` SET `archive` = '0' WHERE `faculty_id`= '$row->faculty_id'");
                    }
                }
            }
        } else {
            printf('faculty do not exist');
        }
        $this->db->query("UPDATE `campuses_tb` SET `archive` = '0' WHERE `campus_id`= $id");
    }
    public function restorefaculty($id)
    {

        $query = $this->db->get_where('faculty_tb', ['faculty_id' => $id]);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $this->db->query("UPDATE `files_tb` SET `archive` = '0' WHERE `faculty_id`= '$row->faculty_id'");
            }
        }
        $this->db->query("UPDATE `faculty_tb` SET `archive` = '0' WHERE `faculty_id`= $id");
    }

    public function deletecampus($id)
    {
        $query = $this->db->get_where('campuses_tb', ['campus_id' => $id]);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $query2 = $this->db->get_where('files_tb', ['campus_name' => $row->campus_name]);
                $this->db->delete('faculty_tb', array('campus_name' => $row->campus_name));
                if ($query2->num_rows() > 0) {
                    foreach ($query2->result() as $row) {
                        $this->db->delete('files_tb', array('campus_name' => $row->campus_name));
                    }
                }
            }
        } else {
            print_r('data not exist');
        }
        $this->db->delete('campuses_tb', array('campus_id' => $id));
    }

    public function deletefaculty($id)
    {
        $query = $this->db->get_where('faculty_tb', ['faculty_id' => $id]);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $this->db->delete('files_tb', array('faculty_id' => $row->faculty_id));
            }
        } else {
            print_r('data not exist');
        }
        $this->db->delete('faculty_tb', array('faculty_id' => $id));
    }
}
