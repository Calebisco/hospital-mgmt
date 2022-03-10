<?php
class dalRoom extends DB{
    public $Id;
    public $Name;
    
    public function insert(){
        $this->Connect();
        $sql= "insert into room (name) value('".$this->Escape($this->Name)."')";
        if ($this->Con->query($sql)){
            return TRUE;
        }  else {
            return FALSE;
        }   
}
public function edit(){
    $arr = array();
    $this->Connect();
    $sql = "select * from room where id = '".$this->Escape($this->Id)."'";
    $sql  = $this->Con->query($sql);
    while ($d = mysqli_fetch_object($sql)){
        return $d;
    }
}


public function update() {
        $this->Connect();
        $sql = "update  room 
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

    public function delete() {
        $this->Connect();
        $sql = "delete from room where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
public function view(){
    $arr = array();
    $this->Connect();
    $sql = "select * from room order by name asc";
    $sql = $this->Con->query($sql);
    while ($d = mysqli_fetch_object($sql)){
       $arr[] = $d; 
    }
    return $arr;
}
}
