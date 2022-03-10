
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-head-line">New Bed Entry</h3>
                <a href="master.php?o=administrator-view"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row center">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        New Bed
                    </div>
                    <div class="panel-body">
                        <form role="form" action="master.php?o=bed-insert" method="post">
                            <div class="form-group">
                                <label> Bed Number<i style="color: red">*</i></label>
                                <input class="form-control" type="text" placeholder="Prifix: WO, CA, CH, IC, LR, OP, OT, PO" name="num">
                                <p class="help-block">Please type your bed number.</p>
                            </div>
                            <div class="form-group">
                                <label> Select Room name<i style="color: red">*</i></label>
                                <select class="form-control" name="room">
                                    <?php
                                    $ddown = new dalRoom;
                                    Dropdown($ddown->view(), 0);
                                    ?>
                                </select>
                                <p class="help-block">Please select room name.</p>
                             </div>
                            <div class="form-group">
                                <label> Amount<i style="color: red">*</i></label>
                                <input class="form-control" type="text" placeholder="$ 0,00,000" name="amu">
                                <p class="help-block">Please bed rent amount per day.</p>
                            </div>
                                
                            <input type="submit" name="sub" value="Save" class="btn btn-success"/>
                            <input type="reset" name="cancel" value="Reset" class="btn btn-danger"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>