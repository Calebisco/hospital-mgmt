<?php

class dalBlood_receiver extends DB {

    public $Id;
    public $PackNumber;
    public $BloodGroup;
    public $ReceiverName;
    public $Bed;
    public $Amount;
    public $Date;

    public function save() {
        $this->Connect();
        $sql = "insert into blood_receiver (packNumber, bloodGroup, receiverName, bed, amount, date) 
            values(
            '" . $this->Escape($this->PackNumber) . "',
            '" . $this->Escape($this->BloodGroup) . "',
            '" . $this->Escape($this->ReceiverName) . "',
            '" . $this->Escape($this->Bed) . "',
            '" . $this->Escape($this->Amount) . "',
            '" . $this->Escape($this->Date) . "'
           )";
        $data = $this->Con->query($sql);
        //  echo $sql;
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
       public function view_report() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, blood_receiver.date, blood_receiver.bloodGroup, blood_receiver.packNumber, blood_receiver.amount, blood_bank.id,  bed.number bname
            FROM users, blood_receiver, blood_bank, bed
            WHERE users.id =  blood_receiver.receiverName";
        $sql .= " GROUP BY blood_receiver.receiverName, blood_receiver.date order by blood_receiver.date desc";
        //  echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
