<?php

if(isset($_POST['sub'])){
  $ad = new dalAdmission();
   $ad->Bedid = $_POST['bdn'];
   $ad->Doctorid = $_POST['don'];
   $ad->Userid = $_POST['ptn'];
   $ad->Ad_day = $_POST['add'];
   
    if($ad->insert()){
        Redirect("master.php?o=admission-new&msg=Save Successfull");
    }  else {
        Redirect("master.php?o=admission-new&msg=Already exist");
    }
}else{
    Redirect("master.php?o=admission-new");
}