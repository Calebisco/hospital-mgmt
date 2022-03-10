<?php

if (isset($_POST['sub'])) {
    $id = $_POST['id'];
    $pa = new dalPatien();
    $pa->Id = $_POST['id'];
    $pa->Name = $_POST['name'];
    $pa->Email = $_POST['email'];
    $pa->Password = $_POST['pass'];
    $pa->Contact = $_POST['cont'];
    $pa->Address = $_POST['add'];
    $paData = $pa->edit();
    $old_ext = $paData->picture;
    if ($_FILES['pic']['name'] != "") {
        $ext = pathinfo($_FILES['pic']['name']);
        $ext = strtolower($ext['extension']);

        if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
            $pa->Picture = $old_ext;
        } else {
            if (file_exists("images/users/users-{$id}.{$old_ext}")) {
                
            }
            move_uploaded_file($_FILES['pic']['tmp_name'], "images/users/users-{$id}.{$ext}");
            $pa->Picture = $ext;
        }
    } else {
        $pa->Picture = $old_ext;
    }
    if ($pa->update()) {
        Redirect("master.php?u=register-view&msg=updateSuccessful");
    } else {
        Redirect("master.php?u=register-view&msg=not Save");
    }
} else {
    Redirect("index.php?u=register");
}



