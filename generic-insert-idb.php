<?php

if(isset($_POST['sub'])){
  $gc = new dalGeneric();
  $gc->Name = $_POST['name'];
  if($gc->insert()){
      Redirect("master.php?o=generic-new&msg=Save Successful");
      
  }
  else{
      Redirect("master.php?o=generic-new&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=generic-new");
}

