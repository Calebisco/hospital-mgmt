<?php

if (isset($_POST['sub'])) {
    $bb = new dalBloodbank();
    $bb->Name = $_POST['name'];
    $bb->Email = $_POST['email'];
    $bb->Contact = $_POST['con'];
    $bb->Address = $_POST['add'];
    $bb->Bloodgroup = $_POST['blood'];
    $bb->Date = date('Y-m-d h:i:s');    

    if ($bb->insert()) {
      Redirect("master.php?o=bloodbank-new&msg=Save Successfull");
    } else {
      Redirect("master.php?o=bloodbank-new&msg=Not Save");
    }
}
else{
    Redirect("master.php?o=bloodbank-new"); 
}
