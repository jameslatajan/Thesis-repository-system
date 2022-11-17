<?php
class CampusesModel extends CI_Model {
    public $campusname;
    public $campusdirector;
    public $ceitdean;
    public $casdean;
    public $ctedean;
    public $cotdean;

    public function addcampus(){
        $this->campusname       = $_POST['campus_name'];
        $this->campusdirector   = $_POST['campus_director'];
        $this->ceitdean         = $_POST['ceit_dean'];
        $this->casdean          = $_POST['cas_dean'];
        $this->ctedean          = $_POST['cte_dean'];
        $this->cotdean          = $_POST['cot_dean'];
    }

}