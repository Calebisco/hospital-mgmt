<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Food Edit</h1>
                <a href="master.php?o=canteen-view" title="diagnosis-invoice-report"><i class="btn btn-success fa fa-list-alt"> View List</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Food edit form
                    </div>
                    <div class="panel-body">
                        <?php
                        $canteen = new dalCanteen();
                        $canteen->Id = $_GET['id'];
                        $can = $canteen->edit();
                        ?>
                        <form role="form" action="master.php?o=canteen-update" method="post">
                            <div class="form-group">
                                <label>Food name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $can->name; ?>">
                                <p class="help-block"></p>
                            </div>
                            <button name="sub" class="btn btn-success"><i class="fa fa-refresh " ></i> Update</button>
                            <input type="reset"  name="sub" value= "Reset" class="btn btn-warning"/>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--/.ROW-->


</div>
<!-- /. PAGE INNER  -->
</div>





