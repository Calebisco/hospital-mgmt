<?php

if(isset($_POST['sub'])){
  $sc = new dalBed();
  $sc->Id = $_POST['id'];
  $sc->Number = $_POST['num'];
  $sc->Roomid = $_POST['room'];
  $sc->Amount = $_POST['amu'];
  if($sc->update()){
      Redirect("master.php?o=bed-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?o=bed-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?o=bed-new");
}


