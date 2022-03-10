<title>IDB Hospital | Cash Report</title>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script  src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker, #datepicker1").datepicker({dateFormat: "yy-mm-dd"}).val();
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
                <h3 class="page-head-line">Cash Information</h3>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row center">
            <div class="c col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Cash Report
                    </div>
                    <div class="panel-body">
                        <form role="form" action="master.php?o=cash" method="post">
                            <div class="form-group">
                                <label> Start Date<i style="color: red">*</i></label>
                                <input class="form-control" type="text" name="sdate" id="datepicker" placeholder="Y-M-D">
                                <p class="help-block">Please type your Start Date.</p>
                            </div>
                            <div class="form-group">
                                <label> End Date<i style="color: red">*</i></label>
                                <input class="form-control" type="text" name="edate" id="datepicker1" placeholder="Y-M-D">
                                <p class="help-block">Please type your End Date.</p>
                            </div>

                            <input type="submit" name="sub" value="Search" class="btn btn-success"/>
                            <input type="reset" name="cancel" value="Reset" class="btn btn-danger"/>
                        </form>


                    </div>
                </div>

            </div>
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <?php
                    if (isset($_POST['sub'])) {
                        $c = new dalCash();
                        $c->sDate = $_POST['sdate'];
                        $c->eDate = $_POST['edate'];

                        $data = $c->search();
                        if ($data) {
                            $debit = 0;
                            $credit = 0;
                            foreach ($data as $value) {
                                if ($value->date < $_POST['sdate']) {
                                    $debit += $value->debit;
                                    $credit += $value->credit;
                                }
                            }
                        }
                        ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>PARTICULARS</th>
                                    <th>Credit</th>
                                    <th>Debit</th>
                                    <th>BALANCE</th>
                                    <th>REMARKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Before <?php echo $_POST['sdate'] ?></td>
                                    <th>Opening Balance</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <th>
                                        <?php
                                        $total = $debit - $credit;
                                        echo $total;
                                        ?>
                                    </th>
                                    <td>--</td>
                                </tr>
                                <?php
                                $debit = 0;
                                $credit = 0;
                                foreach ($data as $value) {
                                    if ($value->date >= $_POST['sdate']) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->date ?></td>
                                            <td><?php echo $value->account_head ?></td>
                                            <td><?php echo $value->credit ?></td>
                                            <td><?php echo $value->debit ?></td>
                                            <td>
                                                <?php
                                                if ($value->credit > 0) {
                                                    $total += $value->credit;
                                                } else {
                                                    $total -= $value->debit;
                                                }
                                                echo $total;
                                                ?>
                                            </td>
                                            <td><?php echo $value->date ?></td>
                                        </tr>
                                        <?php
                                        $debit += $value->debit;
                                        $credit += $value->credit;
                                    }
                                    
                                }
                                ?>
                                <tr>
                                    <td></td>
                                    <th>Closing Balance</th>
                                    <td><?php echo $debit; ?></td>
                                    <td><?php echo $credit; ?></td>
                                    <th><?php echo $total; ?></th>
                                    <th>--</th>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>