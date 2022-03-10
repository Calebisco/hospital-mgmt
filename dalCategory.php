<?php

class dalCategory extends DB{
    public $Id;
    public  $Name;
    
    public function insert(){
        $this->Connect();
    }

    public function view(){
        $arr= array();
        $this->Connect();
        $sql = "select *  from  category order by name asc";
        $sql = $this->Con->query($sql);
       while ($d = mysqli_fetch_object($sql)){
         $arr[] = $d;  
        }
        return $arr ;
    }
}
