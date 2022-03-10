<?php

if (isset($_POST['sub'])) {
    $expen = new dalExpense();
    $expen->Title = $_POST['name'];
    $expen->Description = $_POST['des'];
    $expen->Amount = $_POST['amount'];
    $expen->Expensedate = $_POST['expensedate'];

    if ($expen->insert()) {
        $cash = new dalCash();
        $cash->Accounthead=$_POST['name'];
        $cash->Debit=$_POST['amount'];;
        $cash->Credit=['00'];
        $cash->Remarks =$_POST['des'];
        $cash->Date=$_POST['expensedate'];;
        $cash->insert();

        Redirect("master.php?o=expense-new&msg=Save Successful");
    } else {

        Redirect("master.php?o=expense-new&msg=Not Save");
    }
} else {
    Redirect("master.php?o=expense-new");
}
