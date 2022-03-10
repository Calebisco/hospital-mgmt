<?php

if (isset($_POST['sub'])) {
    $nc = new dalNotice();
    $nc->Date = $_POST['date'];
    $nc->Title = $_POST['title'];
    $nc->Description = $_POST['desr'];

    if ($_FILES['pic']['name'] != "") {
        $ext = pathinfo($_FILES['pic']['name']);
        $ext = strtolower($ext['extension']);

        if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
            $nc->Picture = "";
        } else {
            $nc->Picture = $ext;
        }
    } else {
        $nc->Picture = "";
    }

    //echo $nc->Picture;
    if ($nc->insert()) {
        $id = $nc->Id;
        if ($ext != "") {
            move_uploaded_file($_FILES['pic']['tmp_name'], "images/notice/notice-{$id}.{$ext}");
        }

        Redirect("master.php?o=notice-new&msg=Save Successful");
    } else {
        Redirect("master.php?o=notice-new&msg=Not Save");
    }
} else {
    Redirect("master.php?o=notice-new");
}

