<?php

if(isset($_GET['id'])){
  $sc = new dalMedicine();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=medicine-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=medicine-view&msg=other data dependet");
  }
}
else{
   Redirect("master.php?o=medicine-veiw");
}



