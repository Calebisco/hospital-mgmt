<?php

if(isset($_GET['id'])){
  $sc = new dalDesignation();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=designation-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=designation-view&msg=other data dependet");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw");
}



