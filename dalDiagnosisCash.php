<?php

class dalDiagnosisCash extends DB {

    public $Id;
    public $Account;
    public $Debit;
    public $Credit;
    public $Remarks;
    public $Date;

    public function insert() {
        $this->Connect();
        $sql = "insert into cash (account_head,debit,credit,remarks,date) values(
		'" . $this->Escape($this->Account) . "',
                '" . $this->Escape($this->Debit) . "',
                '" . $this->Escape($this->Credit) . "',
                '" . $this->Escape($this->Remarks) . "',
                '" . $this->Escape($this->Date) . "')";
        $data = $this->Con->query($sql);

        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
