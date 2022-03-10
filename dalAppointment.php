<?php

class dalAppointment extends DB {

    public $Id;
    public $Specialtyid;
    public $Doctorid;
    public $Visitdayid;
    public $Patient_name;
    public $Patient_email;
    public $Patient_address;
    public $Patient_phone_no;
    public $Gender;
    public $Patient_age;
    public $Reason_of_appointment;

    public function insert() {
        $this->Connect();
        $sql = "insert into appointment (specialtyid, doctorid, visitdayid,patient_name,patient_email, patient_address,patient_phone_no,gender,patient_age,reason_of_appointment ) values
		('" . $this->Escape($this->Specialtyid) . "',
		'" . $this->Escape($this->Doctorid) . "',
		'" . $this->Escape($this->Visitdayid) . "',
		'" . $this->Escape($this->Patient_name) . "',
		'" . $this->Escape($this->Patient_email) . "',
		'" . $this->Escape($this->Patient_address) . "',
		'" . $this->Escape($this->Patient_phone_no) . "',
		'" . $this->Escape($this->Gender) . "',
		'" . $this->Escape($this->Patient_age) . "',
		'" . $this->Escape($this->Reason_of_appointment) . "')";


        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select 
		appointment.id,specialty.name, doctor.name dname, visitday.day,
		appointment.patient_name,appointment.patient_email,
		appointment.patient_address,appointment.patient_phone_no,
		appointment.gender,appointment.patient_age,appointment.reason_of_appointment
		from 
		appointment,specialty,doctor,visitday
		where 
		appointment.specialtyid=specialty.id and
		appointment.doctorid=doctor.id and
		appointment.visitdayid=visitday.id 
		order by appointment.id DESC";
        $sql = $this->Con->query($sql);

        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from appointment where id = '" . $this->Escape($this->Id) . "'";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $d;
    }

    public function update() {
        $this->Connect();
        $sql = "update  appointment 
			set       
			specialtyid ='" . $this->Escape($this->Specialtyid) . "',
			doctorid ='" . $this->Escape($this->Doctorid) . "' ,
			visitdayid ='" . $this->Escape($this->Visitdayid) . "',
			patient_name ='" . $this->Escape($this->Patient_name) . "',
			patient_email ='" . $this->Escape($this->Patient_email) . "',
			patient_address ='" . $this->Escape($this->Patient_address) . "' ,
			patient_phone_no ='" . $this->Escape($this->Patient_phone_no) . "' ,
			gender ='" . $this->Escape($this->Gender) . "' ,
			patient_age ='" . $this->Escape($this->Patient_age) . "' , 
			reason_of_appointment ='" . $this->Escape($this->Reason_of_appointment) . "' 
					   
        where
        id = '" . $this->Escape($this->Id) . "'";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from appointment where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
