<?php

if(isset($_GET['id'])){
  $sc = new dalNotice();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=notice-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=notice-view&msg=other data dependet");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw")if(unlink($Files_name.$Folder));
}



