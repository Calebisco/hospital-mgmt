<?php

class dalExpense extends DB {

    public $Id;
    public $Title;
    public $Description;
    public $Amount;
    public $Userid;
    public $Expensedate;

    public function insert() {
        $this->Connect();
        $sql = "insert into expense(title, description,amount, usersid, date) values(
            '" . $this->Escape($this->Title) . "',
            '" . $this->Escape($this->Description) . "',
            '" . $this->Escape($this->Amount) . "',
            '" . $_SESSION['myid'] . "',
            '" . $this->Escape($this->Expensedate) . "'
)";
        echo $sql;
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select  expense.id,expense.title, expense.description,expense.amount,users.name,expense.date

from expense,users
where expense.usersid = users.id
order by expense.title asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from expense where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from expense where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update expense set 
		        title ='" . $this->Escape($this->Title) . "',
                        description= '" . $this->Escape($this->Description) . "',
                        amount ='" . $this->Escape($this->Amount) . "',
			date ='" . $this->Escape($this->Expensedate) . "'
						   
               
        where
            id = '" . $this->Escape($this->Id) . "'";

        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
?>


