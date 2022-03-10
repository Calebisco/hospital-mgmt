<?php

if(isset($_POST['sub'])){
  $sc = new dalDesignation();
  $sc->Id = $_POST['id'];
  $sc->Name = $_POST['name'];
  if($sc->update()){
      Redirect("master.php?o=designation-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=designation-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=designation-new");
}


