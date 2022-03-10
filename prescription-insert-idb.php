<?php

if (isset($_POST['sub'])) {
    $pes = new dalPrescription();
    $pes->Doctorid = $_POST['doc'];
    $pes->Userid = $_POST['ptn'];
    $pes->Date = date("Y-m-d");

    $medicine = $_POST['medicine'];
    $qty = $_POST['qty'];
    $dmor = $_POST['dmor'];
    $dmid = $_POST['dmid'];
    $dnig = $_POST['dnig'];
    $meal = $_POST['meal'];

    for ($i = 0; $i < count($medicine); $i++) {
        if ($medicine[$i] > 0 && $qty[$i] > 0) {
            $pes->Medicineid = $medicine[$i];
            $pes->Quentity = $qty[$i];
            $pes->Morning = $dmor[$i];
            $pes->Midday = $dmid[$i];
            $pes->Night = $dnig[$i];
            $pes->Meal = $meal[$i];
            $pes->save();
        }
    }
    Redirect("master.php?o=prescription-new&msg=Save Successfull");
} else {
    Redirect("master.php?o=prescription-new");
}

