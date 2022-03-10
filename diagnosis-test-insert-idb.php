<?php

if (isset($_POST['sub'])) {
    $diag = new dalDiagnosisTest();
    $diag->Name = $_POST['name'];
    $diag->Amount = $_POST['amount'];
    $diag->Discount = $_POST['dis'];
    $diag->Vat = $_POST['vat'];

    if ($diag->insert()) {
        Redirect("master.php?o=diagnosis-test-new&msg=Save Successfull");
    } else {
        //echo $diag->Err;
        Redirect("master.php?o=diagnosis-test-new&msg=Not Save");
    }
    
} 
else {
    Redirect("master.php?o=diagnosis-test-new");
}

?>




