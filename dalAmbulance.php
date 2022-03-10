<?php

class dalAmbulance extends DB {

    public $Id;
    public $Vehicle_no;
    public $Staffid;

    public function insert() {
        $this->Connect();
        $sql = "insert into ambulance(vehicle_no,staffid)
                
        values('" . $this->Escape($this->Vehicle_no) . "',
            '" . $this->Escape($this->Staffid) . "'
                ) ";

        if ($this->Con->query($sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select ambulance.id, ambulance.vehicle_no,  staff.name
            
        from ambulance,staff 
        where ambulance.staffid =staff.id
        order by ambulance.vehicle_no asc";
        $sql = $this->Con->query($sql);

        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }
 public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from ambulance where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
    public function update() {
        $this->Connect();
        $sql = "update ambulance
        set       
            vehicle_no ='" . $this->Escape($this->Vehicle_no) . "',
               staffid= '" . $this->Escape($this->Staffid) . "'
        where
            id = '" . $this->Escape($this->Id) . "'";
        
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function delete() {
        $this->Connect();
        $sql = "delete from ambulance where id = '" . $this->Escape($this->Id) . "'";
		//echo $sql;
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
