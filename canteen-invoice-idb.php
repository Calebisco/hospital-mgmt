<div id="page-wrapper">
    <div id="page-inner" class="modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Food Invoice</h1>
                <a href="master.php?o=canteen-invoice-report" ><i class="btn btn-success fa fa-list-alt"> Invoice List</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a><hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Invoice
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="master.php?o=canteen-invoice-insert">
                            <?php
                            for ($i = 1; $i <= 6; $i++) {
                                ?>
                                <div class="form-group">                                
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Medicine</label>
                                            <select class="form-control medicine" name="medicineid[]" id="med-<?php echo $i ?>">
                                                <option value="0">Choose Medicine</option>
                                                <?php
                                                $v = new dalCanteen();
                                                $medData = $v->GlobalView("canteen", "id, name, price", "name");
                                                Dropdown($medData, 0);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Quantity</label>
                                            <input type="text"  name="qty[]" id="qty-<?php echo $i ?>" value="0" class="quantity form-control" />
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Per Unit</label>
                                            <input type="text" class="form-control" name="price[]" id="price-<?php echo $i ?>" readonly="" value="0" />
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Total Amount</label>
                                            <input type="text" class="form-control" id="total-<?php echo $i ?>" readonly="" value="0" />
                                        </div>

                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <input type="submit"  name="sub" value= "Save" class="btn btn-success"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('body').on('keyup', '.quantity', function() {
            var qty = $(this).attr("id");
            var ser = qty.substr(4);
            var id = $("#med-" + ser).val();
            var qty = parseInt($("#qty-" + ser).val());

            var datalist = "id=" + id + "&qty=" + qty;
            $.ajax({
                type: 'POST',
                data: datalist,
                url: "dal/ajax-medicine-stock.php",
                success: function(data) {
                    qty = parseInt(data);
                    $("#qty-" + ser).val(qty);
                    var price = parseFloat($("#price-" + ser).val());
                    var total = qty * price;
                    $("#total-" + ser).val(total);
                }
            });
        });

        $(".medicine").change(function() {
            var med = $(this).attr("id");
            var ser = med.substr(4);
            var val = parseInt($(this).val());

            if (val == 0) {
                $("#price-" + ser).val(0);
                $("#qty-" + ser).val(0);
            }
<?php
foreach ($medData as $m) {
    ?>
                else if (val == <?php echo $m->id ?>) {
                    $("#price-" + ser).val(<?php echo $m->price ?>);
                    $("#total-" + ser).val(<?php echo $m->price ?>);
                    $("#qty-" + ser).val(1);
                }
    <?php
}
?>

        });

    });
</script>

























