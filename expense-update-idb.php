<?php

if (isset($_POST['sub'])) {
    $sc = new dalExpense();
    $sc->Id = $_POST['id'];
    $sc->Title = $_POST['name'];
    $sc->Description = $_POST['des'];
    $sc->Amount = $_POST['amount'];
    $sc->Expensedate = $_POST['expensedate'];
    if ($sc->update()) {
        Redirect("master.php?o=expense-view&msg=Update Successful");
    } else {
        Redirect("master.php?o=expense-view&msg=Not Save");
    }
} else {
    Redirect("master.php?o=expense-new");
}