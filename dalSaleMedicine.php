<?php

class dalSaleMedicine extends DB {

    public $Id;
    public $PatientId;
    public $MedicineId;
    public $Quantity;
    public $Date;
    public $Total;

    public function save() {
        $this->Connect();
        $sql = "insert into sales_medicine (usersid,medicineid,quantity,date,total) values(
                  '" . $this->Escape($this->PatientId) . "',
                  '" . $this->Escape($this->MedicineId) . "',
                  '" . $this->Escape($this->Quantity) . "',
                  '" . $this->Escape($this->Date) . "',
	'" . $this->Escape($this->Total) . "')";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view_report() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, sales_medicine.date, users.id 
            FROM sales_medicine, users
            WHERE users.id = sales_medicine.usersid";
        $sql .= " GROUP BY sales_medicine.usersid, sales_medicine.date order by sales_medicine.date desc";

        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function view_report_details() {
        $arr = array();
        $this->Connect();
        $sql = "SELECT users.name, sales_medicine.date, users.id, medicine.name mname, sales_medicine.quantity, 
                        medicine.price
                FROM sales_medicine, users, medicine
                WHERE users.id = sales_medicine.usersid and
                       sales_medicine.medicineid = medicine.id and
                       users.id = '" . $this->Escape($this->PatientId) . "' and
                       sales_medicine.date = '" . $this->Escape($this->Date) . "'";
        //echo $sql;
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

}
