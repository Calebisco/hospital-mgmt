<?php

class dalBloodbank extends DB {

    public $Id;
    public $Name;
    public $Email;
    public $Contact;
    public $Address;
    public $Bloodgroup;
    public $Date;

    public function insert() {
        $this->Connect();
        $sql = "insert into blood_bank (name, email, contact, address, blood_group, date) 
            values(
            '" . $this->Escape($this->Name) . "',
            '" . $this->Escape($this->Email) . "',
            '" . $this->Escape($this->Contact) . "',
            '" . $this->Escape($this->Address) . "',
            '" . $this->Escape($this->Bloodgroup) . "',
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

      public function Donate() {
        $arr = array();
        $this->Connect();
        $sql = "select * from blood_bank where id = '" . $this->Escape($this->Id) . "'";
        
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
}
