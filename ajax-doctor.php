<?php
require_once 'DB.php';
class AjaxDoctor extends DB {

    public function LoadDoctor($id) {
        $this->Connect();
        $sql = "select doctor.id, doctor.name from doctor, doctorspecialty where doctor.id = doctorspecialty.doctorid and doctorspecialty.specialtyid = '".$this->Escape($id)."' order by doctor.name asc";
        $sql = $this->Con->query($sql);
        $list = "<option value='0'>Choose Doctor</option>";        
        
        while ($d = mysqli_fetch_object($sql)) {
            $list .= "<option value=\"{$d->id}\">{$d->name}</option>";
        }
        echo $list;
    }

}

$aj = new AjaxDoctor();
$aj->LoadDoctor($_POST['id']);
?>

