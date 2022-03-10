<title>IDB Hospital | Donar List</title>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Blood Bank</h1>
                 <a href="master.php?o=bloodbank-new"><i class="btn btn-success fa fa-file"> New Donation</i></a>
                <a href="master.php?o=blood_bank_receiver_view"><i class="btn btn-success fa fa-file"> Blood Receiver</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Donar Information
                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                <th>Donar Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Dragging Date</th>
                                <th>Donate to patient</th>
                            </tr> 
                            <?php
                            $blo = new dalBloodbank();
                            Table4($blo->GlobalView("blood_bank", "id, name, email, contact, address, blood_group, date", "name asc"), "o=blood_bank");
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







