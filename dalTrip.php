<?php

class dalTrip extends DB {

    public $Id;
    public $Ambulanceno;
    public $Driver;
    public $Sdestination;
    public $Edestination;
    public $Amount;
    public $Tripdate;

    public function insert() {
        $this->Connect();
        $sql = "insert into trip(ambulanceid,staffid,start_destination,end_destination,amount,date)values(
            
            '" . $this->Escape($this->Ambulanceno) . "',
            '" . $this->Escape($this->Driver) . "',
            '" . $this->Escape($this->Sdestination) . "',
            '" . $this->Escape($this->Edestination) . "',
              '" . $this->Escape($this->Amount) . "',
            '" . $this->Escape($this->Tripdate) . "'
        )";

        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            // $this->Err = mysqli_error($this->Con);
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select 
            trip.id,ambulance.vehicle_no ,staff.name,
            trip.start_destination, trip.end_destination,trip.amount,trip.date
            from 
            trip,ambulance,staff 
            where 
            trip.ambulanceid=ambulance.id and
            trip.staffid=staff.id 
            order by trip.id asc";
        $sql = $this->Con->query($sql);

        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from trip where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from trip where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
     public function update() {
        $this->Connect();
        $sql = "update trip set 
		                    ambulanceid ='" . $this->Escape($this->Ambulanceno) . "',
                            staffid= '" . $this->Escape($this->Driver) . "',
                            start_destination ='" . $this->Escape($this->Sdestination) . "',
							end_destination ='" . $this->Escape($this->Edestination) . "',
							amount ='" . $this->Escape($this->Amount) . "',
						    date ='" . $this->Escape($this->Tripdate) . "'
               
        where
            id = '" . $this->Escape($this->Id) . "'";
        
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>