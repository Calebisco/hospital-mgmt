<?php

if(isset($_POST['sub'])){
  $ap = new dalAppointment();
  $ap->Id = $_POST['id'];
  $ap->Specialtyid = $_POST['specialty'];
  $ap->Doctorid = $_POST['doctor'];
  $ap->Visitdayid = $_POST['visitday'];
  $ap->Patient_name = $_POST['name'];
  $ap->Patient_email = $_POST['email'];
  $ap->Patient_address = $_POST['address'];
  $ap->Patient_phone_no = $_POST['Phone'];
  $ap->Gender = $_POST['gender'];
  $ap->Patient_age = $_POST['age'];
  $ap->Reason_of_appointment = $_POST['reason'];
  if($ap->update()){
      Redirect("master.php?u=appointment-view&msg=Update Successful");
      
  }
  else{
      Redirect("master.php?u=appointment-view&msg=Not Save");
  }
}
else{
    Redirect("master.php?u=appointment-view");
}

