<?php

if(isset($_GET['id'])){
  $sc = new dalroom();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=room-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=room-view&msg=other data dependet");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw");
}


