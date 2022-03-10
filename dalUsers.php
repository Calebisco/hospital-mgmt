<?php

class dalUsers extends DB {

    public $Id;
    public $Name;
    public $Email;
    public $Password;
    public $Type;
    public $Address;
    public $Contact;
    public $Gender;
    public $Picture;

    public function check() {
        $this->Connect();
        $sql = "select * from users where email = '" . $this->Escape($this->Email) . "'  and password = '" . $this->Escape(md5($this->Password)) . "'";
        $sql = $this->Con->query($sql);
        if (mysqli_num_rows($sql) > 0) {
            while ($d = mysqli_fetch_assoc($sql)) {
                return $d;
            }
        } else {
            return array();
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from users where id = '" . $this->Escape($this->Id) . "'";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
    
    
    public function update() {
        $this->Connect();
        $sql = "update  users 
                set       
                name ='" . $this->Escape($this->Name) . "',
                email ='" . $this->Escape($this->Email) . "',
                contact ='" . $this->Escape($this->Contact) . "',
                gender ='" . $this->Escape($this->Gender) . "',
                address ='" . $this->Escape($this->Address) . "',
                picture ='" . $this->Escape($this->Picture) . "'

       
        where
        id = '" .  $_SESSION['myid'] . "'";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
