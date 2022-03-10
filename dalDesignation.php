<?php

class dalDesignation extends DB {

    public $Id;
    public $Name;

    public function insert() {
        $this->Connect();
        $sql = "insert into designation (name) values('" . $this->Escape($this->Name) . "')";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  designation 
 set       
name ='" . $this->Escape($this->Name) . "' 
       
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
        $sql = "select * from designation where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from designation where id = '" . $this->Escape($this->Id) . "'";
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
        $sql = "select designation.id, designation.name
            from designation
                where designation.id = designation.id
                order by designation.name asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
