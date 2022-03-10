<?php

class dalCanteen extends DB {

    public $Id;
    public $Name;
    public $Quantity;
    public $Price;

    public function insert() {
        $this->Connect();
        $sql = "insert into canteen(name, quantity, price) values(
            '" . $this->Escape($this->Name) . "',
                   '" . $this->Escape($this->Quantity) . "',
                 '" . $this->Escape($this->Price) . "'
)";
        $data = $this->Con->query($sql);
        echo $data;
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from canteen where id = '" . $this->Escape($this->Id) . "'";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update canteen set 
                     name ='" . $this->Escape($this->Name) . "',
        where
            id = '" . $this->Escape($this->Id) . "'";
        
        echo $sql;

        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
        public function view_report() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, diagnosis_invoice.date, users.id 
            FROM diagnosis_invoice, users
            WHERE users.id = diagnosis_invoice.patientid";
        $sql .= " GROUP BY diagnosis_invoice.patientid, diagnosis_invoice.date order by diagnosis_invoice.date desc";
        //  echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}

