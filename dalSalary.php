<?php

class dalSalary extends DB {

    public $id;
    public $Name;
    public $Amount;
    public $Details;
    public $Date;
    public $Userid;

    public function save() {
        $this->Connect();
        $sql = "insert into salary(name, amount, details, date, userid) values(
            '" . $this->Escape($this->Name) . "',
            '" . $this->Escape($this->Amount) . "',
            '" . $this->Escape($this->Details) . "',
            '" . $this->Escape($this->Date) . "',
            '" . $this->Escape($this->Userid) . "'
)";
        echo "$sql";
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
