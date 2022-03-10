<?php

class DB {

    protected $Con;

    protected function Connect() {

        $this->Con = new mysqli("localhost", "root", "", "hospital");
    }

    protected function Escape($data) {
        return mysqli_real_escape_string($this->Con, $data);
    }
    
    public function GlobalEdit($table, $id){
        $arr = array();
        $this->Connect();
        $sql = "select * from {$table} where id = '" . $this->Escape($id) . "'";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }
    
    public function GlobalView($table, $select, $order){
        $arr= array();
        $this->Connect();
        $sql = "select {$select}  from  {$table} order by {$order}";
        $sql = $this->Con->query($sql);
       while ($d = mysqli_fetch_object($sql)){
         $arr[] = $d;  
        }
        return $arr ;
    }

}
