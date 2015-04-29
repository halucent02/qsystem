<?php
class Reporitorial_gen extends CI_MODEL{
    var $table ="served_archive";
    var $date = "date_of_transaction";
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_percentage_service($fromyear,$toyear){
           $query = "SELECT * FROM $this->table ";
            $query .= "WHERE DATE($this->date) ";
            $query .= "BETWEEN STR_TO_DATE('$fromyear','%m/%d/%Y') AND STR_TO_DATE('$toyear','%m/%d/%Y') ";
            
            $query = $this->db->query($query);
            
            $releasing   = 0;
            $inquiry     = 0;
            $for_repair  = 0;
            $appointment = 0;
            foreach ($query->result_array() as $count){
                if($count['status'] == "RELEASING"){$releasing=$releasing+1;}
                if($count['status'] == "INQUIRY"){$inquiry=$inquiry+1;}
                if($count['status'] == "FOR REPAIR"){$for_repair=$for_repair+1;}
                if($count['status'] == "APPOINTMENT"){$appointment=$appointment+1;}
            }
            
            $total = $releasing + $inquiry + $for_repair + $appointment;
            
            $overall_transactions = array($releasing,$inquiry,$for_repair,$appointment,$total);
            
            return $overall_transactions;
    }
}