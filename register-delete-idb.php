<?php

if(isset($_GET['id'])){
  $pa = new dalPatien();
  $pa->Id = $_GET['id'];
 
  if($pa->delete()){
      
      
      Redirect("master.php?u=register-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?u=register-view&msg=other data dependet");
  }
}
else{
   // Redirect("master.php?u=register-veiw");
}



