<?php

if (isset($_POST['sub'])) {
    $br = new dalBlood_receiver();
    $br->PackNumber = $_POST['pack'];
    $br->BloodGroup = $_POST['group'];
    $br->ReceiverName = $_POST['receive'];
    $br->Bed = $_POST['bed'];
    $br->Date = date('Y-m-d h:i:s');

    $amu = $_POST['price'];
    $push = $_POST['push'];
    $total = $amu + ($push);

    $br->Amount = $total;

    if ($br->save()) {
        $cash = new dalCash();
        $cash->Accounthead = "Blood bank service Account";
        $cash->Debit = '00,00,000';
        $cash->Credit = $total;
        $cash->Remarks = "Blood bank service charge income gain";
        $cash->Date = date("Y-m-d");
        $cash->insert();

        Redirect("master.php?o=blood_bank_receiver_view&msg=Save Successfull");
    } else {
        Redirect("master.php?o=blood_bank_receiver_view&msg=Not Save");
    }
}
 