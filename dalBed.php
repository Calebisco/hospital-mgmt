<?php

class dalBed extends DB {

    public $id;
    public $Number;
    public $Roomid;
    public $Amount;

    public function insert() {
        $this->Connect();
        $sql = "insert into bed(number, roomid, amount) values(
            '" . $this->Escape($this->Number) . "',
            '" . $this->Escape($this->Roomid) . "',
            '" . $this->Escape($this->Amount) . "'
)";
        $data = $this->Con->query($sql);
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
      public function view(){
      $arr = array();
      $this->Connect();
      $sql = "select * from bed order by number asc";
      $sql = $this->Con->query($sql);
      while ($d = mysqli_fetch_assoc($sql)){
      $arr[]=$d;
      }
      return $arr;
      }
     */

    public function update() {
        $this->Connect();
        $sql = "update  bed 
 set       
number ='" . $this->Escape($this->Number) . "',
roomid ='" . $this->Escape($this->Roomid) . "',
amount ='" . $this->Escape($this->Amount) . "'
       
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
        $sql = "select * from bed where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
     public function delete() {
        $this->Connect();
        $sql = "delete from bed where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
}

?>
