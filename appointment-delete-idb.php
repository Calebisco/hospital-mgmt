<?php

if(isset($_GET['id'])){
  $ap = new dalAppointment();
  $ap->Id = $_GET['id'];
 
  if($ap->delete()){
      
      
      Redirect("master.php?u=appointment-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?u=appointment-view&msg=other data dependet");
  }
}
else{
   Redirect("master.php?u=appointment-veiw");
}



