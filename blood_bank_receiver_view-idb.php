<title>IDB Hospital | Bloog Receiver List</title>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Blood Receiver Information</h1>
                <a href="master.php?o=bloodbank-view"><i class="btn btn-success fa fa-file"> Blood Bank</i></a>
                <a href="master.php?o=bloodbank-new"><i class="btn btn-success fa fa-file"> New Donation</i></a>
                 <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Receiver Information
                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                <th>Date & Time</th>
                                <th>Patient Name</th>
                                <th>Bed Number</th>
                                <th>Blood Group</th>
                                <th>Bag Identity</th>
                                <th>Amount</th>

                            </tr> 
                            <?php
                            $v = new dalBlood_receiver();
                            $data = $v->view_report();
                            foreach ($data as $dt) {
                                echo "<tr>";
                                echo "<td>{$dt->date}</td>";
                                echo "<td>{$dt->name}</td>";
                                echo "<td>{$dt->bname}</td>";
                                echo "<td>{$dt->bloodGroup}</td>";
                                echo "<td>{$dt->packNumber}</td>";
                                echo "<td>{$dt->amount}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!--/.ROW-->


    </div>
    <!-- /. PAGE INNER  -->
</div>







