<?php

if(isset($_GET['id'])){
  $sc = new dalDiagnosisTest();
  $sc->Id = $_GET['id'];
 
  if($sc->delete()){
      
      
      Redirect("master.php?o=diagnosis-test-view&msg=Delete Successful");
      
  }
  else{
     
     Redirect("master.php?o=diagnosis-test-view&msg=other data dependend");
  }
}
else{
   // Redirect("master.php?o=Subcategory-veiw");
}



