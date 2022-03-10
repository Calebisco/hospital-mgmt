<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Diagnosis Test Invoice</h1>
                <a href="master.php?o=diagnosis-invoice-report"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Diagnosis Test Invoice
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="master.php?o=diagnosis-invoice-insert">
                            <div class="row panel-body modal-content">
                                <div class="form-group col-sm-4">
                                    <label>Outdoor Patient</label>
                                    <input class="form-control" type="text" name="outpat" placeholder="Outoor patient"/>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="outadd" placeholder="Outoor patient address"/>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Mobile Number</label>
                                    <input class="form-control" type="text" name="outmob" placeholder="Outoor patient mobile number"/>
                                </div>
                                <div  class="form-group col-sm-4">
                                    <label>Admitted Patient</label><br>
                                    <select class="form-control" name="ptn">
                                        <option>Select Admitted Patient</option>
                                        <?php
                                        $v = new dalPatien();
                                        $user = $v->GlobalView("users where type='u'", "id,name", "name asc");
                                        $allFree = $v->GlobalView("admission where re_day!='0000-00-00'", "userid", "id asc");
                                        foreach ($user as $bed) {
                                            $c = 0;
                                            foreach ($allFree as $free) {
                                                if ($free->userid == $bed->id) {
                                                    $c++;
                                                }
                                            }
                                            if ($c == 0) {
                                                echo "<option value=\"{$bed->id}\">{$bed->name}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Patient Bed Number</label><br>
                                    <select class="form-control" name="bed">
                                        <option>Select Be Number</option>
                                        <?php
                                        $v = new dalBed();
                                        Dropdown($v->GlobalView("bed", "id,number name", "name asc"), 0);
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>References </label><br>
                                    <select class="form-control" name="doctor">
                                        <option>Select Doctor Name</option>
                                        <?php
                                        $v = new dalDoctor();
                                        Dropdown($v->GlobalView("doctor", "id,name", "name asc"), 0);
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <h1 class="page-subhead-line"></h1>
                            <?php
                            for ($i = 1; $i <= 6; $i++) {
                                ?>
                                <div class="form-group">                                
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>diagnosis test</label>
                                            <select class="form-control diagnosis" name="diagnosisid[]" id="med-<?php echo $i ?>">
                                                <option value="0">Choose diagnosis test</option>
                                                <?php
                                                $v = new dalDiagnosisTest();
                                                $medData = $v->GlobalView("diagnosistest", "*", "name");
                                                Dropdown($medData, 0);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <label>amount</label>
                                            <input class="form-control" type="number" name="amount[]" id="amount-<?php echo $i ?>" readonly="" value="0" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>vat</label>
                                            <input class="form-control" type="number" name="vat[]" id="vat-<?php echo $i ?>" readonly="" value="0" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>discount</label>
                                            <input class="form-control" type="number" name="discount[]" id="discount-<?php echo $i ?>" readonly="" value="0" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Total Amount</label>
                                            <input class="form-control" type="number" id="total-<?php echo $i ?>" readonly="" value="0" name="total[]" />
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <button onclick="Save()" name="sub" class="btn btn-success btn-sm">Save</button>
                            <input onclick="Reset()" type="reset" name="cancel" value="Reset" class="btn btn-danger btn-sm"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".diagnosis").change(function () {
            var med = $(this).attr("id");
            var ser = med.substr(4);
            var val = parseInt($(this).val());

            if (val == 0) {
                $("#amount-" + ser).val(0);
                $("#vat-" + ser).val(0);
                $("#discount-" + ser).val(0);
                $("#qty-" + ser).val(0);
            }
<?php
foreach ($medData as $m) {
    ?>
                else if (val == <?php echo $m->id ?>) {
                    $("#amount-" + ser).val(<?php echo $m->amount ?>);
                    $("#vat-" + ser).val(<?php echo $m->vat ?>);
                    $("#discount-" + ser).val(<?php echo $m->discount ?>);
                    $("#total-" + ser).val(<?php
    $total = $m->amount - ($m->amount * $m->discount) / 100;
    $total = $total + ($total * $m->vat) / 100;
    echo $total;
    ?>);
                    $("#qty-" + ser).val(1);
                }
    <?php
}
?>

        });

    });
</script>

























