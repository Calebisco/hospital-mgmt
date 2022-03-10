<?php

class dalDoctor extends DB {

    public $Id;
    public $Name;
    public $Email;
    public $Contact;
    public $Fees;
    public $Vshour;
    public $Vehour;
    public $Vday;
    public $Commission;
    public $Details;

    public function insert() {
        $this->Connect();
        $sql = "insert into doctor (name, email,contact,fees,visit_start_hour,visit_end_hour,visit_day,commission,details) 
            values(
            '" . $this->Escape($this->Name) . "',
            '" . $this->Escape($this->Email) . "',
            '" . $this->Escape($this->Contact) . "',
            '" . $this->Escape($this->Fees) . "',
            '" . $this->Escape($this->Vshour) . "',
            '" . $this->Escape($this->Vehour) . "',
            '" . $this->Escape($this->Vday) . "',
            '" . $this->Escape($this->Commission) . "',
            '" . $this->Escape($this->Details) . "')";
        $data = $this->Con->query($sql);
        echo $sql;
        if ($data) {
            $this->Id = mysqli_insert_id($this->Con);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from doctor where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from doctor where id = '" . $this->Escape($this->Id) . "'";
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
        $sql = "update doctor 
        set       
            name ='" . $this->Escape($this->Dname) . "'
        where
            id = '" . $this->Escape($this->Id) . "'";

        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
