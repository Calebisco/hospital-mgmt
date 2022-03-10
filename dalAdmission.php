<?php

class dalAdmission extends DB {

    public $Id;
    public $Bedid;
    public $Doctorid;
    public $Userid;
    public $Ad_day;
    public $Re_day;

    public function insert() {
        $this->Connect();
        $sql = "insert into admission(bedid, doctorid, userid, ad_day) values(
            '" . $this->Escape($this->Bedid) . "',
            '" . $this->Escape($this->Doctorid) . "',
            '" . $this->Escape($this->Userid) . "',
            '" . $this->Escape($this->Ad_day) . "'
)";
        $data = $this->Con->query($sql);
        if ($data) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select 
                admission.id,bed.number,doctor.name dname,users.name uname,ad_day,re_day
             from admission,bed,doctor,users 
             where
                admission.bedid=bed.id and
                admission.doctorid=doctor.id and 
                admission.userid=users.id
             order by bedid asc";

        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function admitted() {
        $arr = array();
        $this->Connect();
        $sql = "select 
                admission.id, bed.number, doctor.name dname, users.name uname, admission.ad_day 
                from admission, bed, doctor, users 
             where
                admission.bedid=bed.id and
                admission.doctorid=doctor.id and 
                admission.userid=users.id and
                admission.re_day = '0000-00-00'
             order by bedid asc";

        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }

    public function release() {
        $arr = array();
        $this->Connect();
        $sql = "select 
                admission.id, bed.number, doctor.name dname, users.name uname, admission.ad_day 
                from admission, bed, doctor, users 
             where
                admission.bedid=bed.id and
                admission.doctorid=doctor.id and 
                admission.userid=users.id and
                admission.re_day != '0000-00-00'
             order by bedid asc";

        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $arr[] = $d;
        }
        return $arr;
    }
    
    public function Discharge() {
        $arr = array();
        $this->Connect();
        $sql = "select 
                admission.id, bed.number, doctor.name dname, users.name uname, admission.ad_day 
                from admission, bed, doctor, users 
          where
                admission.bedid=bed.id and
                admission.doctorid=doctor.id and 
                admission.userid=users.id and
                admission.re_day != '0000-00-00'
             order by bedid asc";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    /*
      public function update() {
      $this->Connect();
      $sql = "update  bed
      set
      number ='" . $this->Escape($this->Number) . "',
      roomid ='" . $this->Escape($this->Roomid) . "',
      amount ='" . $this->Escape($this->Amount) . "'

      where
      id = '" . $this->Escape($this->Id) . "'";
      if ($this->Con->query($sql)) {
      return TRUE;
      } else {
      return FALSE;
      }
      }
     
     * 
      public function delete() {
      $this->Connect();
      $sql = "delete from bed where id = '" . $this->Escape($this->Id) . "'";
      $this->Con->query($sql);
      if (mysqli_affected_rows($this->Con)) {
      return TRUE;
      } else {
      return FALSE;
      }
      } */
}
