<?php

class dalStaff extends DB {

    public $Id;
    public $Name;
    public $Department;
    public $Designation;
    public $Salary;
    public $Contact;
    public $Gender;
    public $Address;
    public $Age;
    public $Picture;

    public function insert() {
        $this->Connect();
        $sql = "insert into staff (name,departmentid,designationid,salary,contact,gender,address,age,picture) 
	  values(
	  '" . $this->Escape($this->Name) . "',
	  '" . $this->Escape($this->Department) . "',
	  '" . $this->Escape($this->Designation) . "',
	  '" . $this->Escape($this->Salary) . "',
	  '" . $this->Escape($this->Contact) . "',
	  '" . $this->Escape($this->Gender) . "',
	  '" . $this->Escape($this->Address) . "',
	  '" . $this->Escape($this->Age) . "',
	  '" . $this->Escape($this->Picture) . "')";
        if ($this->Con->query($sql)) {
            $this->Id = mysqli_insert_id($this->Con);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update  staff 
			set       
			name ='" . $this->Escape($this->Name) . "' ,
			departmentid ='" . $this->Escape($this->Department) . "',
			designationid ='" . $this->Escape($this->Designation) . "',
			salary ='" . $this->Escape($this->Salary) . "',
			contact ='" . $this->Escape($this->Contact) . "',
			gender ='" . $this->Escape($this->Gender) . "',
			address ='" . $this->Escape($this->Address) . "',
			age ='" . $this->Escape($this->Age) . "',
			picture ='" . $this->Escape($this->Picture) . "'
					   
        where
        id = '" . $this->Escape($this->Id) . "'";
        if ($this->Con->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from staff where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from staff where id = '" . $this->Escape($this->Id) . "'";
        $this->Con->query($sql);
        if (mysqli_affected_rows($this->Con)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function view() {
        $arr = array();
        $this->Connect();
        $sql = "select staff.id,staff.name,department.name dpname, designation.name dname,staff.salary,staff.contact,staff.gender,staff.address,staff.age,staff.picture from staff,department,designation where
		staff.departmentid=department.id and
		staff.designationid=designation.id
        order by staff.name asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            echo "<tr>
		      <td>$d->name</td>
			  <td>$d->dpname</td>
			  <td>$d->dname</td>
			  <td>$d->salary</td>
			  <td>$d->contact</td>
			  <td>$d->gender</td>
			  <td>$d->address</td>
			  <td>$d->age</td>
			  <td><imgstyle='width:100px; height:80px;' src='images/staff/staff-{$d->id}.{$d->picture}'/></td>
			  <td><a href = \"master.php?o=staff-edit&id=$d->id\"><i class=\"fa fa-pencil-square\"></i></a></td>
			  <td><a href = \"master.php?o=staff-delete&id=$d->id\"><i class=\"fa fa-trash\"></i></a></td>
		   </tr>";
        }
        // return $arr;
    }

}
