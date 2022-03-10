<?php
if(isset($_POST['sub'])){
    $ro = new dalCanteen();
    $ro->Name = $_POST['name'];
    $ro->Quantity = $_POST['qty'];
    $ro->Price = $_POST['price'];
    if($ro->insert()){
        Redirect("master.php?o=canteen&msg=Save Successfull");
    }  else {
         Redirect("master.php?o=canteen&msg= NotSave ");
    }  
}else {
        Redirect("master.php?o=canteen");
    }