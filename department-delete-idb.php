<?php

if(isset($_GET['id'])){
  $sc = new dalDepartment();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=department-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=department-view&msg=other data dependet");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw");
}



