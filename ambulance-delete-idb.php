<?php

if(isset($_GET['id'])){
  $v = new dalAmbulance();
  $v->Id = $_GET['id'];
 
  if($v->delete()){
      
      
      Redirect("master.php?o=ambulance-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=ambulance-view&msg=other data dependet");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw");
}