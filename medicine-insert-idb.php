<?php

if(isset($_POST['sub'])){
  $mc = new dalMedicine();
  $mc->Name = $_POST['name'];
  $mc->Genericid = $_POST['genericid'];
  $mc->Strips = $_POST['stp'];
  $mc->Price = $_POST['price'];
  if($mc->insert()){
      Redirect("master.php?o=medicine-new&msg=Save Successful");
      
  }
  else{
      Redirect("master.php?o=medicine-new&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=medicine-new");
}

