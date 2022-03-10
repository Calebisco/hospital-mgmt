<?php

if(isset($_POST['sub'])){
  $sc = new dalDepartment();
  $sc->Id = $_POST['id'];
  $sc->Name = $_POST['name'];
  if($sc->update()){
      Redirect("master.php?o=department-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=department-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=department-new");
}


