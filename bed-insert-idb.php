<?php
if(isset($_POST['sub'])){
    $bd = new dalBed();
    $bd->Number = $_POST['num'];
    $bd->Roomid = $_POST['room'];
    $bd->Amount = $_POST['amu'];
    if($bd->insert()){
        $cash = new dalCash();
        $cash->Accounthead="Bed-Rent";
        $cash->Debit=['00'];
        $cash->Credit=$_POST['amu'];;
        $cash->Remarks ="Room no-".$_POST['room']."Bed no-".$_POST['num'];
        $cash->Date=date("Y-m-d");
        $cash->insert();
        Redirect("master.php?o=bed-new&msg=Save Successfull");
    }  else {
        Redirect("master.php?o=bed-new&msg=Already exist");
    }
}else{
    Redirect("master.php?o=bed-new");
}