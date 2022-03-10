<?php

if(isset($_POST['sub'])){
  $sc = new dalDepartment();
  $sc->Name = $_POST['name'];
  if($sc->insert()){
      Redirect("master.php?o=department-new&msg=Save Successful");
      
  }
  else{
      Redirect("master.php?o=department-new&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=department-new");
}

