<title>IDB Hospital | Diagnosis test name view</title>
<div id="page-wrapper">
    <div id="page-inner" class="modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Diagnosis Test View</h1>
                <a href="master.php?o=diagnosis-test-new"><i class="btn btn-success fa fa-file"> New Entry</i></a>
                <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Diagnosis Test List

                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>

                                <th>Diagnosis Test Name</th>
                                <th>Amount</th>
                                <th>Discount</th>
                                <th>Vat</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr> 
                            <?php
                            $sc = new dalDiagnosisTest();

                            Table($sc->view(), "o=diagnosis-test");
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







