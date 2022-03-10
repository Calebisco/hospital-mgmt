<?php

class dalPatien extends DB {

    public $Id;
    public $Name;
    public $Email;
    public $Password;
    public $Type;
    public $Address;
    public $Contact;
    public $Gender;
    public $Picture;

    public function insert() {
        $this->Connect();
        $sql = "insert into users (name, email, password,type,address, contact,gender,picture ) values
		('" . $this->Escape($this->Name) . "',
		'" . $this->Escape($this->Email) . "',
        '" . $this->Escape(md5($this->Password)) . "',
		'" . $this->Escape($this->Type) . "',
		'" . $this->Escape($this->Address) . "',
	    '" . $this->Escape($this->Contact) . "',
	    '" . $this->Escape($this->Gender) . "' ,
		 '" . $this->Escape($this->Picture) . "'
                )";
        if ($this->Con->query($sql)) {
            $this->Id = mysqli_insert_id($this->Con);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select *  from  users order by name asc";
        $sql = $this->Con->query($sql);

        while ($d = mysqli_fetch_object($sql)) {
            echo "<tr>
		      <td>$d->name</td>
                          <td>$d->email</td>
                          <td>$d->address</td>
			  <td>$d->contact</td>
                             
			  <td><img style='width:100px; height:80px;' src='images/users/users-{$d->id}.{$d->picture}'/></td>
			  <td><a href = \"master.php?u=register-edit&id=$d->id\"><i class=\"fa fa-pencil-square\"></i></a></td>
			  <td><a href = \"master.php?u=register-delete&id=$d->id\"><i class=\"fa fa-trash\"></i></a></td>
		   </tr>";
        }
        //  return $arr;
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from users where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  users 
 set       
name ='" . $this->Escape($this->Name) . "', 
       email= '" . $this->Escape($this->Email) . "',
       password= '" . $this->Escape($this->Password) . "',
       contact= '" . $this->Escape($this->Contact) . "',
       address= '" . $this->Escape($this->Address) . "',
        picture= '" . $this->Escape($this->Picture) . "'  
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
        $sql = "delete from admission where userid = '" . $this->Id . "'";
        $this->Con->query($sql);
        $sql = "delete from diagnosis_invoice where patientid = '" . $this->Id . "'";
        $this->Con->query($sql);
        $sql = "delete from prescription where userid = '" . $this->Id . "'";
        $this->Con->query($sql);
        $sql = "delete from sales_medicine where usersid = '" . $this->Id . "'";
        $this->Con->query($sql);
        $sql = "delete from feedback where userid = '" . $this->Id . "'";
        $this->Con->query($sql);
        $sql = "delete from users where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
