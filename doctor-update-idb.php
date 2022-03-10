<?php

if (isset($_POST['sub'])) {
    $sc = new dalDoctor();
    $sc->Id = $_POST['id'];
    $sc->Dname = $_POST['dname'];

    $ds = new dalDoctorSpecialty();
    $ds->Doctorid = $_POST['id'];
    $ds->delete();

    $specialty = $_POST['skills'];
    if ($specialty) {
        $sp = new dalDoctorSpecialty();
        $sp->Doctorid = $_POST['id'];

        foreach ($specialty as $value) {
            $sp->Specialtyid = $value;
            $sp->insert();
        }
    }

    if ($sc->update()) {
        Redirect("master.php?o=doctor-view&msg=Update Successful");
    } else {
        Redirect("master.php?o=doctor-view&msg=Not Save");
    }
} else {
    Redirect("master.php?o=doctor-new");
}



