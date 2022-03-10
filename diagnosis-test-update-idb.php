<?php

if(isset($_POST['sub'])){
  $sc = new dalDiagnosisTest();
  $sc->Id = $_POST['id'];
  $sc->Name = $_POST['name'];
  $sc->Amount = $_POST['amount'];
  $sc->Discount = $_POST['dis'];
  $sc->Vat = $_POST['vat'];
  if($sc->update()){
      Redirect("master.php?o=diagnosis-test-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=diagnosis-test-view&msg=Not Updated");
  }
}
else{
    //Redirect("master.php?o=diagnosis-test-new");
}
