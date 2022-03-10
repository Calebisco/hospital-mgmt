<?php

class dalVisitday extends DB {

    public $Id;
    public $Doctorid;
    public $Day;
   

    public function insert() {
        $this->Connect();
        $sql = "insert into visitday (doctorid, day) 
            values(
            '" . $this->Escape($this->Doctorid) . "',
            '" . $this->Escape($this->Day) . "'
            )";
        $data =  $this->Con->query($sql);
        
        if($this->Con->query($sql)){
           
            return TRUE;
        }  else {
            return FALSE;
        }
    }
	 public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from visitday where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
	  public function delete() {
        $this->Connect();
        $sql = "delete from visitday where id = '" . $this->Escape($this->Id) . "'";
		echo $sql;
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    
    
    public function update() {
        $this->Connect();
        $sql = "update visitday
        set       
            day ='" . $this->Escape($this->Day) . "',
               doctorid= '" . $this->Escape($this->Doctorid) . "'
        where
            id = '" . $this->Escape($this->Id) . "'";
        
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select visitday.id,  visitday.day, doctor.name

from visitday, doctor
where visitday.doctorid = doctor.id
order by visitday.day asc";
        
       $sql = $this->Con->query($sql);
       
       while ($d = mysqli_fetch_object($sql)) {
          $arr[] = $d;
       }
        return $arr;
    }
	
}


