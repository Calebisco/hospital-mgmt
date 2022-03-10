<?php
if(isset($_POST['sub'])){
    $ro = new dalRoom();
    $ro->Name = $_POST['name'];
    if($ro->insert()){
        Redirect("master.php?o=room-new&msg=Save Successfull");
    }  else {
         Redirect("master.php?o=room-new&msg= NotSave ");
    }  
}else {
        Redirect("master.php?o=room-new");
    }