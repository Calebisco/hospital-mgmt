<?php

class dalNotice extends DB {

    public $Id;
    public $Date;
    public $Title;
    public $Description;
    public $Picture;

    public function insert() {
        $this->Connect();
        $sql = "insert into notice (date, title, description, picture) values('" . $this->Escape($this->Date) . "','" . $this->Escape($this->Title) . "','" . $this->Escape($this->Description) . "','" . $this->Escape($this->Picture) . "')";
        if ($this->Con->query($sql)) {
            $this->Id = mysqli_insert_id($this->Con);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {
        $this->Connect();
        $sql = "update notice 
                set
                title ='" . $this->Escape($this->Date) . "',
                title ='" . $this->Escape($this->Title) . "',
                description='" . $this->Escape($this->Description) . "',
                picture='" . $this->Escape($this->Picture) . "'    
       
        where
        id = '" . $this->Escape($this->Id) . "'";
        if ($this->Con->query($sql)) {
            $this->Id = mysqli_insert_id($this->Con);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function edit() {
        $arr = array();
        $this->Connect();
        $sql = "select * from notice where id = '" . $this->Escape($this->Id) . "'";


        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            return $d;
        }
    }

    public function delete() {
        $this->Connect();
        $sql = "delete from notice where id = '" . $this->Escape($this->Id) . "'";
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
        $sql = "select * from notice order by notice.title asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            echo "<tr>
                    <td>$d->date</td>
                    <td>$d->title</td>
                    <td>$d->description</td>
                    <td><img style='width:100px; height:80px;' src='images/notice/notice-{$d->id}.{$d->picture}'/></td>
                    <td><a href = \"master.php?o=notice-edit&id=$d->id\"><i class=\"fa fa-pencil-square\"></i></a></td>
                    <td><a href = \"master.php?o=notice-delete&id=$d->id\"><i class=\"fa fa-trash\"></i></a></td>
		   </tr>";
        }
        // return $arr;
    }
    
    public function fview() {
        $arr = array();
        $this->Connect();
        $sql = "select * from notice order by notice.date asc";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
             $arr[] = $d;
        }
        return $arr;
            
            /*
            echo "<tr>
                    <td>$d->date</td>
                    <td>$d->title</td>
                    <td>$d->description</td>
                    <td><img style='width:100px; height:80px;' src='images/notice/notice-{$d->id}.{$d->picture}'/></td>
                    </tr>";
        }*/
        // return $arr;
    }
}
