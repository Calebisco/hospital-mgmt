<?php
require_once 'DB.php';
class AjaxDay extends DB {

    public function LoadDay($id) {
        $this->Connect();
        $sql = "select * from visitday where doctorid = '".$this->Escape($id)."' order by day asc";
        $sql = $this->Con->query($sql);
        $list = "<option value='0'>Choose Day</option>";        
        
        while ($d = mysqli_fetch_object($sql)) {
            if($d->day == date("l")){
                $list .= "<option value=\"{$d->id}\">Today ".date('Y-m-d')." </option>";
            }
            else{
                $temp = date('Y-m-d', strtotime("next $d->day"));
                $list .= "<option value=\"{$d->id}\">{$d->day} - {$temp}</option>";
            }
        }
        echo $list;
    }

}

$aj = new AjaxDay();
$aj->LoadDay($_POST['id']);
?>

