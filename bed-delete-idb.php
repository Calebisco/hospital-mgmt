<?php

if(isset($_GET['id'])){
  $sc = new dalBed();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=bed-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=bed-view&msg=other data dependet");
  }
}
else{
 Redirect("master.php?o=bed-veiw");
}



