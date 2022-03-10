<title>IDB Hospital | Food List</title>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Canteen Food List</h1>
                <a href="master.php?o=canteen-voucher"><i class="btn btn-success fa fa-file"> New Voucher Entry</i></a>
                <a href="master.php?o=canteen-voucher-report"><i class="btn btn-success fa fa-file"> Voucher List</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Food List
                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                <th>Food Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr> 
                            <?php
                            $canteen = new dalCanteen();
                            Table($canteen->GlobalView("canteen", "id, name", "name asc"), "o=canteen");
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







