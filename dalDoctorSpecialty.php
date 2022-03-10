<?php

class dalDoctorSpecialty extends DB {

    public $Id;
    public $Doctorid;
    public $Specialtyid;

    public function insert() {
        $this->Connect();
        $sql = "insert into doctorspecialty (doctorid, specialtyid) 
            values(
            '" . $this->Escape($this->Doctorid) . "',
            '" . $this->Escape($this->Specialtyid) . "')";
                
        if($this->Con->query($sql)){            
            return TRUE;
        }  else {
            return FALSE;
        }
    }
    
     public function view($id) {
        $arr = array();
        $this->Connect();
        $sql = "select * from doctorspecialty";
        if($id > 0){
            $sql .= " where doctorid='".$this->Escape($id)."'";
        }
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }
    
    public function delete() {
        $this->Connect();
        $sql = "delete from doctorspecialty where doctorid = '" . $this->Escape($this->Doctorid) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
