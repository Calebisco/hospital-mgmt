<?php
require_once 'DB.php';
class AjaxMedicineStock extends DB {

    public function check($id, $qty) {
        $arr = array();
        $this->Connect();
        $sql = "select medicine.strips, (select sum(sales_medicine.quantity) from sales_medicine where sales_medicine.medicineid = medicine.id group by medicine.id) totalSale 
            from medicine
            where medicine.id = '".$id."'";
        $sql = $this->Con->query($sql);
        while ($d = mysqli_fetch_object($sql)) {
            $strips = $d->strips;
            $sale = $d->totalSale;
        }
        if($strips >= ($sale + $qty)){
            echo $qty;
        }
        else{
            echo ($strips-$sale);
        }
        
    }

}

$aj = new AjaxMedicineStock();
$aj->check($_POST['id'], $_POST['qty']);
?>

