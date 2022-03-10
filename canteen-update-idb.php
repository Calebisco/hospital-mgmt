<?php

if (isset($_POST['sub'])) {
    $sc = new dalCanteen();
    $sc->Id = $_POST['id'];
    $sc->Name = $_POST['name'];
    if ($sc->update()) {
        Redirect("master.php?o=canteen-view&msg=Update Successful");
    } else {
        Redirect("master.php?o=canteen-view&msg=Not Save");
    }
} else {
    Redirect("master.php?o=canteen-new");
}