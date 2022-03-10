<?php

if(isset($_POST['sub'])){
  $gc = new dalGeneric();
  $gc->Id = $_POST['id'];
  $gc->Name = $_POST['name'];
  if($gc->update()){
      Redirect("master.php?o=generic-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=generic-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=generic-new");
}


