<?php

if (isset($_POST['sub'])) {
    $pa = new dalPatien();
    $pa->Name = $_POST['name'];
    $pa->Email = $_POST['email'];
    $pa->Password = $_POST['pass'];
    $pa->Contact = $_POST['cont'];
     $pa->Type = $_POST['type'];
    $pa->Address = $_POST['add'];
    $pa->Gender = $_POST['gen'];
    if ($_FILES['pic']['name'] != "") {
        $ext = pathinfo($_FILES['pic']['name']);
        $ext = strtolower($ext['extension']);

        if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
            $pa->Picture = "";
        } else {
            $pa->Picture = $ext;
        }
    } else {
        $pa->Picture = "";
    }

    if ($pa->insert()) {
        $id = $pa->Id;
        if ($ext != "") {
            move_uploaded_file($_FILES['pic']['tmp_name'], "images/users/users-{$id}.{$ext}");
        }
        Redirect("index.php?o=register&msg=Save Successful");
    } else {
        Redirect("index.php?o=register&msg=not Save");
    }
} else {
    Redirect("index.php?o=register");
}



