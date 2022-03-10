<?php

if(isset($_GET['id'])){
  $sc = new dalExpense();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=expense-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=expense-view&msg=other data dependend");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw");
}




