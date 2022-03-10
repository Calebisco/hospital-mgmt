<?php

if(isset($_POST['sub'])){
  $am = new dalAmbulance();
   $am->Id = $_POST['id'];
  $am->Vehicle_no = $_POST['veh'];
  $am->Staffid = $_POST['staffid'];
  if($am->update()){
      Redirect("master.php?o=ambulance-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=ambulance-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=ambulance-view");
}

