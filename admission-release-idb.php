<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker,#datepicker2").datepicker({dateFormat: "yy-mm-dd"}).val();
    });
</script>

<link rel="stylesheet" type="text/css" href="assets/js/jquery.tokenize.css" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tokenize.js"></script>

<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-head-line">Patient Release</h3>
                <a href="master.php?o=admission-view"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row center">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Patient Release
                    </div>
                    <div class="panel-body">
                        <?php
                        $dis = new dalAdmission();
                        $dis->Id = $_GET['id'];
                        $data = $dis->Discharge();
                        ?>
                        <div>
                            <p>Bed No: <?php echo $data->number; ?></p>
                            <p>Doctor Name: <strong><?php echo $data->dname; ?></strong></p>
                            <p>Patient Name: <strong><?php echo $data->uname; ?></strong></p>
                            <p>Admission: <?php echo $data->ad_day; ?> To- Release: <?php echo date("Y-m-d") ?></p><hr class="border">
                            <table class="table tab-content table-hover table-striped table-responsive">
                                 <tr>
                                    <td> Total Days: 5X100</td>
                                    <td>=500</td>
                                </tr>
                                <tr>
                                    <td> Vat: </td>
                                     <td>=.......</td>
                                </tr>
                                <tr>
                                    <td> Discount:</td>
                                     <td> =500</td>
                                </tr>
                                <tr>
                                    <td><br><br><br> Patient</td>
                                    <td align="right"> <br><br><br>Authority</td>
                                </tr>
                            </table>
                        </div>
                        <input type="submit" name="sub" value="Confirm" class="btn btn-success btn-sm"/>
                        <input type="reset" name="cancel" value="Reset" class="btn btn-danger btn-sm"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>