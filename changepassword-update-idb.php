<?php

if (isset($_POST['sub'])) {
    $cp = new dalChangePassword();
    $cp->Id = $_SESSION['myid'];
    $cp->Pass = $_POST['pass'];
    $cp->Pass1 = $_POST['pass1'];

    if ($_POST['pass1'] != $_POST['pass2']) {
        Redirect("master.php?u=change-password&msg=password not matched");
    } else if ($cp->check()) {
        $cp->update();
        Redirect("master.php?u=change-password&msg=Change password Successfully");
    } else {
        Redirect("master.php?u=change-password&msg=password  Invalid");
    }
} else {
    Redirect("master.php?u=change-password");
}


