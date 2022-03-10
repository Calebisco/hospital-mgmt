<?php

if(isset($_POST['sub'])){
  $am = new dalAmbulance();
  $am->Vehicle_no = $_POST['veh'];
  $am->Staffid = $_POST['staffid'];
  
  if($am->insert()){
      Redirect("master.php?o=ambulance-new&msg=Save Successful");
      
  }
  else{
      Redirect("master.php?o=ambulance-new&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=ambulance-new");
}

