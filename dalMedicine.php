<?php

class dalMedicine extends DB {

    public $Id;
    public $Name;
    public $Genericid;
    public $Strips;
    public $Price;

    public function insert() {
        $this->Connect();
        $sql = "insert into medicine (name,genericid,strips,price) values(
               '" . $this->Escape($this->Name) . "',
                '" . $this->Escape($this->Genericid) . "',
                '" . $this->Escape($this->Strips) . "',
                '" . $this->Escape($this->Price) . "')";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  medicine 
                    set       
                    name ='" . $this->Escape($this->Name) . "',
                    genericid ='" . $this->Escape($this->Genericid) . "' ,
                    strips ='" . $this->Escape($this->Strips) . "',
                    price ='" . $this->Escape($this->Price) . "'  
       
        where
        id = '" . $this->Escape($this->Id) . "'";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from medicine where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from medicine where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select medicine.id,medicine.name,generic.name as gname,medicine.strips,medicine.price from medicine,generic where medicine.genericid=generic.id order by name asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
