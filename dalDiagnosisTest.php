<?php

class dalDiagnosisTest extends DB {

    public $Id;
    public $Name;
    public $Amount;
    public $Discount;
    public $Vat;

    //public $Err;

    public function insert() {
        $this->Connect();
        $sql = "insert into diagnosistest (name, amount,discount,vat) values('" . $this->Escape($this->Name) . "', '" . $this->Escape($this->Amount) . "', '" . $this->Escape($this->Discount) . "', '" . $this->Escape($this->Vat) . "')";
        //echo $sql;
        $data = $this->Con->query($sql);

        if ($data) {
            return TRUE;
        } else {
            //$this->Err = mysqli_error($this->Con);
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select * from diagnosistest order by diagnosistest.name asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from diagnosistest where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  diagnosistest set
                name = '" . $this->Escape($this->Name) . "',
                amount = '" . $this->Escape($this->Amount) . "', 
                discount = '" . $this->Escape($this->Discount) . "',
                vat = '" . $this->Escape($this->Vat) . "'
       
        where
        id = '" . $this->Escape($this->Id) . "'";
        //echo $sql;
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from diagnosistest where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
