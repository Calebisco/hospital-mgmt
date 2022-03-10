<?php

if (isset($_POST['sub'])) {
    $doc = new dalDoctor();
    $doc->Name = $_POST['name'];
    $doc->Email = $_POST['email'];
    $doc->Contact = $_POST['con'];
    $doc->Fees = $_POST['vfees'];
    $doc->Vshour = $_POST['vstart'];
    $doc->Vehour = $_POST['vend'];
    $doc->Vday = $_POST['vday'];
    $doc->Commission = $_POST['com'];
    $doc->Details = $_POST['details'];

    if ($doc->insert()) {
        $id = $doc->Id;
        echo $id;
        
        $specialty = $_POST['skills'];
        
        if($specialty){
            $sp = new dalDoctorSpecialty();
            $sp->Doctorid = $id;
            
            foreach ($specialty as $value){                
                $sp->Specialtyid = $value; 
                $sp->insert();
            }
        }
        
        Redirect("master.php?o=doctor-new&msg=Save Successfull");
    } else {
        Redirect("master.php?o=doctor-new&msg=Not Save");
    }
}
else{
    Redirect("master.php?o=doctor-new"); 
}
