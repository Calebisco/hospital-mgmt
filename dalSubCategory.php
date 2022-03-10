<?php

class dalSubCategory extends DB {

    public $Id;
    public $Name;
    public $Categoryid;

    public function insert() {
        $this->Connect();
        $sql = "insert into subcategory (name ,categoryid) values('" . $this->Escape($this->Name) . "', '" . $this->Escape($this->Categoryid) . "')";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  subcategory 
 set       
name ='" . $this->Escape($this->Name) . "', 
       categoryid= '" . $this->Escape($this->Categoryid) . "'
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
        $sql = "select * from subcategory where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from subcategory where id = '" . $this->Escape($this->Id) . "'";
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
        $sql = "select subcategory.id, subcategory.name, category.name cname

from subcategory, category
where subcategory.categoryid = category.id
order by subcategory.name asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
