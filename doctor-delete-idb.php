<?php

if(isset($_GET['id'])){
  $doc = new dalDoctor();
  $doc->Id = $_GET['id'];
  
  $ds = new dalDoctorSpecialty();
    $ds->Doctorid = $_GET['id'];
    $ds->delete();
	
	$vd = new dalVisitday();
    $vd->Doctorid = $_GET['id'];
    $vd->delete();
	
 
  if($doc->delete()){      
      Redirect("master.php?o=doctor-view&msg=Delete Successful");      
  }
  else{
     
     Redirect("master.php?o=doctor-view&msg=other data dependet");
  }
}
else{
   Redirect("master.php?o=doctor-veiw");
}

