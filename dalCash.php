<?php

class dalCash extends DB {

    public $Id;
    public $Accounthead;
    public $Debit;
    public $Credit;
    public $Remarks;
    public $Date;
    
    public $sDate;
    public $eDate;

    public function insert() {
        $this->Connect();
        $sql = "insert into cash(account_head, debit, credit, remarks, date) values(
            '" . $this->Escape($this->Accounthead) . "',
            '" . $this->Escape($this->Debit) . "',
            '" . $this->Escape($this->Credit) . "',
            '" . $this->Escape($this->Remarks) . "',
            '" . $this->Escape($this->Date) . "'
)";
        //echo $sql;
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
    public function search() {
        $arr = array();
        $this->Connect();
        $sql = "select * from cash where date <= '".$this->Escape($this->eDate)."'";
        
       $sql = $this->Con->query($sql);
       
       while ($d = mysqli_fetch_object($sql)) {
          $arr[] = $d;
       }
        return $arr;
    }

}

?>
