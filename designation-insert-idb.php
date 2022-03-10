<?php

if(isset($_POST['sub'])){
  $sc = new dalDesignation();
  $sc->Name = $_POST['name'];
  if($sc->insert()){
      Redirect("master.php?o=designation-new&msg=Save Successful");
      
  }
  else{
      Redirect("master.php?o=designation-new&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=designation-new");
}

