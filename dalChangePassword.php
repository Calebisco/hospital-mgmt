<?php

class dalChangePassword extends DB {

    public $Id;
    public $Pass;
    public $Pass1;
    public $Pass2;
    
    
       public function check() {
        $arr = array();
        $this->Connect();
        $sql = "select * from users where id = '" . $this->Escape($this->Id) . "' and password = '".md5($this->Pass)."'";
        $sql = $this->Con->query($sql);
        if(mysqli_num_rows($sql) > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }


    public function update() {
        
            $this->Connect();
            $sql = "update users 
                    set       
                   password ='" . md5($this->Pass1) . "' 
                           where
                           id = '" .  $this->Escape($this->Id) . "'";
            $this->Con->query($sql);
    }

}
