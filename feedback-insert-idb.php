<?php
session_start();
if (isset($_POST['sub'])) {
    $fd = new dalFeedback();
    $fd->User =  $_SESSION['myid'];
    $fd->Rating = $_POST['rating'];
    $fd->Desr = $_POST['desr'];
    $fd->Date = date('Y:m:d h:i:s');

    if ($fd->insert()) {

        Redirect("index.php?u=frontend-feedback-view&msg=Save Successful");
    } else {
        Redirect("index.php?u=frontend-feedback-view&msg=Not Save");
    }
} else {
    Redirect("index.php?u=frontend-feedback-view");
}


