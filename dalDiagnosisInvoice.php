<?php

class dalDiagnosisInvoice extends DB {

    public $Id;
    public $Date;
    public $Outpat;
    public $PatientId;
    public $Diagnosisid;
    public $Amount;
    public $Vat;
    public $Discount;
    public $Total;

    public function save() {
        $this->Connect();
        $sql = "insert into  diagnosis_invoice (date, patientid, diagnosistestid, amount, vat, discount, total) values(
                                    '" . $this->Escape($this->Date) . "', 
		'" . $this->Escape($this->PatientId) . "', 
		'" . $this->Escape($this->Diagnosisid) . "', 
		'" . $this->Escape($this->Amount) . "', 
		'" . $this->Escape($this->Vat) . "', 
		'" . $this->Escape($this->Discount) . "',
		'" . $this->Escape($this->Total) . "')";
        $data = $this->Con->query($sql);

        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view_report() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, diagnosis_invoice.date, users.id 
            FROM diagnosis_invoice, users
            WHERE users.id = diagnosis_invoice.patientid";
        $sql .= " GROUP BY diagnosis_invoice.patientid, diagnosis_invoice.date order by diagnosis_invoice.date desc";
        //  echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

     public function view_report_details() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, diagnosis_invoice.date, users.id, diagnosistest.name dname, diagnosistest.amount
                FROM diagnosis_invoice, users, diagnosistest
                WHERE users.id = diagnosis_invoice.patientid and
                       diagnosis_invoice.diagnosistestid = diagnosistest.id and
                       users.id = '" . $this->Escape($this->PatientId) . "' and
                       diagnosis_invoice.date = '" . $this->Escape($this->Date) . "'";
        //echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
