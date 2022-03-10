<?php

class dalPrescription extends DB {

    public $Id;
    public $Doctorid;
    public $Userid;
    public $Medicineid;
    public $Date;
    public $Quentity;
    public $Morning;
    public $Midday;
    public $Night;
    public $Meal;

    public function save() {
        $this->Connect();
        $sql = "insert into prescription (doctorid, userid, date, medicineid, quentity,morning, midday, night, meal)
            values(
            '" . $this->Escape($this->Doctorid) . "',
            '" . $this->Escape($this->Userid) . "',
            '" . $this->Escape($this->Date) . "',    
            '" . $this->Escape($this->Medicineid) . "',            
            '" . $this->Escape($this->Quentity) . "',
            '" . $this->Escape($this->Morning) . "',
            '" . $this->Escape($this->Midday) . "',
            '" . $this->Escape($this->Night) . "',
            '" . $this->Escape($this->Meal) . "'
                )";
        //echo $sql;
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view_report() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, prescription.date, users.id
            FROM prescription, users
            WHERE users.id = prescription.userid";
        $sql .= " GROUP BY prescription.userid, prescription.date order by prescription.date desc";

        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function view_report_details() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, users.id, prescription.date, medicine.name mname, medicine.amount, doctor.name dname
                FROM prescription, users, medicine, doctor
                WHERE users.id = prescription.userid and
                       prescription.medicineid = medicine.id and
                       prescription.doctorid = doctor.id
                       users.id = '" . $this->Escape($this->Userid) . "' and
                       medicine.mname = '" . $this->Escape($this->Medicineid) . "' and
                       doctor.dname = '" . $this->Escape($this->Doctorid) . "' and
                       prescription.date = '" . $this->Escape($this->Date) . "'";
        echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
