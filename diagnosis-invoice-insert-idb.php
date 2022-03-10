<?php

if (isset($_POST['sub'])) {
    $di = new dalDiagnosisInvoice();
    $diagnosis = $_POST['diagnosisid'];
    $amount = $_POST['amount'];
    $vat = $_POST['vat'];
    $discount = $_POST['discount'];
    $total = $_POST['total'];
    $di->PatientId = $_POST['ptn'];
    $di->Date = date('Y-m-d h:i:s');

    $totalAmount = 0;

    for ($i = 0; $i < count($diagnosis); $i++) {
        if ($diagnosis[$i] > 0) {
            $di->Diagnosisid = $diagnosis[$i];
            $di->Amount = $amount[$i];
            $di->Vat = $vat[$i];
            $di->Discount = $discount[$i];
            $di->Total = $total[$i];
            $di->save();

            $totalAmount += Calc($amount[$i], $vat[$i], $discount[$i]);
        }
    }

    $cash = new dalCash();
    $cash->Accounthead = "Diagonostic Test";
    $cash->Debit = $totalAmount;
    $cash->Credit = $totalAmount;
    $cash->Remarks = "Diagonostic Test";
    $cash->Date = date("Y-m-d");
    $cash->insert();

    Redirect("master.php?o=diagnosis-invoice&msg=Save Successfull");
} else {
    Redirect("master.php?o=diagnosis-invoice&msg=Not Save");
}
