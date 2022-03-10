<?php

if(isset($_GET['id'])){
  $sc = new dalGeneric();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=generic-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=generic-view&msg=other data dependet");
  }
}
else{
   Redirect("master.php?o=generic-veiw");
}



