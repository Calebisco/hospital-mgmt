<?php

if (isset($_POST['sub'])) {
    $pro = new dalUsers();
    $pro->Name = $_POST['name'];
    $pro->Email = $_POST['email'];
    //$pro->Password = $_POST['pass'];
    //$pro->Type = $_POST['type'];
    $pro->Address = $_POST['add'];
    $pro->Contact = $_POST['cont'];
    $pro->Gender = $_POST['gen'];

$loc = "images/users/users-" . $_SESSION['myid'] . "." . $_SESSION['mypic'];
  
  if($_FILES['pic']['name']){
      $ext = pathinfo($_FILES['pic']['name']);
      $ext = strtolower($ext['extension']);
      
      if($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg"){
         $pro->Picture  = $_SESSION['mypic']; 
      }
      else{
          if(file_exists($loc)){
              unlink($loc);
          }
          move_uploaded_file($_FILES['pic']['tmp_name'], "images/users/users-" . $_SESSION['myid'] . "." . $ext);
          $pro->Picture = $ext;
          $_SESSION['mypic'] = $ext;
      }
  }
  else{
     $pro->Picture = $_SESSION['mypic']; 
  }
    if ($pro->update()) {
         $_SESSION['myname'] = $_POST['name'];
        Redirect("master.php?u=home&msg=Update Success");
    } else {
        Redirect("master.php?u=home&msg=Name already exist");
    }
} else {
    Redirect("master.php?u=profile-new");
}

