<title>IDB Hospital | Prescription print</title>

<script type="text/javascript">
    function printPageArea(areaID) {
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-head-line">Prescription Print Preview</h3>
                <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
                <a href="master.php?o=prescription-report" title="prescription-report"><i class="btn btn-success fa fa-list-alt"> Prescription List</i></a>
                <a href="master.php?o=prescription-new" title="prescription-new"><i class="btn btn-success fa fa-pencil"> New Prescription</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-sm-12" id="printableArea">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>Prescription</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $pre = new dalPrescription();
                        $pre->userid = $_GET['uid'];
                        $pre->Date = $_GET['date'];
                        $data = $pre->view_report_details();

                        foreach ($data as $dt) {
                            ?>
                            <table class="table table-responsive" width="500">
                                <tr>
                                    <td colspan="2"><img src="assets-front/images/Invoice-logo.png" alt="logo"/></td>
                                </tr>
                                <tr>
                                    <td class="borderTop">
                                        <p>Address: Agargaon, Rokeya shoroni, Dhaka-1212</p>
                                        <p>Contact: 029645875</p>
                                        <p>Email: idb@idbhospital.com</p>
                                        <p>Web: www.idbhospital.com</p>
                                    </td>
                                    <td>
                                        <p>Patient Name: <?php echo $dt->name ?></p>
                                        <p>Address: </p>
                                        <p>Age: </p>
                                        <p>Bed No: </p>
                                        <p>Admission Date: </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Doctor Reference: </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Mode of payment: On cash </td>
                                </tr>
                            </table>
                            <table class="table table-responsive table-hover table-striped" width="500">
                                <tr>
                                    <th>Serial</th>
                                    <th>Particulars</th>
                                    <th>No of diagnosis</th>
                                    <th>Amount</th>
                                </tr>
                                <?php
                                $total = 0;
                                $c = 1;
                                foreach ($data as $d) {
                                    ?>
                                    <tr>
                                        <td><?php echo "#" . $c++; ?></td>
                                        <td><?php echo $d->dname ?></td>
                                        <td>1</td>
                                        <td>
                                            <?php
                                         $dag = $d->amount;
                                        echo $dag;
                                        $total += $dag;
                                        ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                <tr>
                                    <td colspan="2"></td>
                                    <td>Sub Total</td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>Tax</td>
                                    <td>0000</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>Total Bill</td>
                                    <td><?php echo $total; ?></td>
                                </tr>

                            </table>
                            <?php
                            break;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>