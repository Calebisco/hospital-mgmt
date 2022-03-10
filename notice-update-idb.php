<?php

if (isset($_POST['sub'])) {
    $id = $_POST['id'];
    $sc = new dalNotice();
    $sc->Id = $_POST['id'];
    $sc->Title = $_POST['title'];
    $sc->Description = $_POST['desr'];

    $selData = $sc->edit();

    $old_ext = $selData->picture;
    if ($_FILES['pic']['name'] != "") {
        $ext = pathinfo($_FILES['pic']['name']);
        $ext = strtolower($ext['extension']);

        if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
            $sc->Picture = $old_ext;
        } else {
            if (file_exists("images/notice/notice-{$id}.{$old_ext}")) {
                
            }
            move_uploaded_file($_FILES['pic']['tmp_name'], "images/notice/notice-{$id}.{$ext}");
            $sc->Picture = $ext;
            
        }
    } else {
        $sc->Picture = $old_ext;
    }


    if ($sc->update()) {
        Redirect("master.php?o=notice-view&msg=Update Successful");
    } else {
        Redirect("master.php?o=notice-view&msg=Not Save");
    }
} else {
    Redirect("master.php?o=notice-new");
}


