<?php

if(isset($_POST['sub'])){
  $gc = new dalMedicine();
  $gc->Id = $_POST['id'];
  $gc->Name = $_POST['name'];
  $gc->Genericid = $_POST['genericid'];
  $gc->Strips = $_POST['stp'];
  $gc->Price = $_POST['price'];
  if($gc->update()){
      Redirect("master.php?o=medicine-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=medicine-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=medicine-new");
}


