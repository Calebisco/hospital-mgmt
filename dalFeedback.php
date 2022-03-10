<?php

class dalFeedback extends DB {

    public $Id;
    public $User;
    public $Rating;
    public $Desr;
    public $Date;

    public function insert() {
        $this->Connect();
        $sql = "insert into feedback (userid,rating,description,date) value(
            '" . $this->Escape($this->User) . "',
            '" . $this->Escape($this->Rating) . "',
            '" . $this->Escape($this->Desr) . "',
            '" . $this->Escape($this->Date) . "')";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from room where id = '" . $this->Escape($this->Id) . "'";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  feedback 
                set       
                userid ='" . $this->Escape($this->User) . "',
                rating ='" . $this->Escape($this->Rating) . "' ,
                description ='" . $this->Escape($this->Desr) . "' ,
                date ='" . $this->Escape($this->Date) . "' 
       
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
        $sql = "delete from fedback where id = '" . $this->Escape($this->Id) . "'";
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
        $sql = "select feedback.id, users.name, users.picture, feedback.rating, feedback.description, feedback.date, users.id uid
            from feedback, users
            where feedback.userid= users.id order by feedback.id desc";
        //echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
