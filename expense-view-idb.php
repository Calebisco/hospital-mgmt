<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Expense-veiw</h1>
                <a href="master.php?o=expense-new" ><i class="btn btn-success fa fa-binoculars"> New entry</i></a>
               <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Expense List

                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>

                                <th>Title</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Employee Name(Data Entry)</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>


                            </tr> 
                            <?php
                            $ex = new dalExpense();

                            Table($ex->view(), "o=expense");
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








