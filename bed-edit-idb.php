
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-head-line">Bed Edit</h3>
                <a href="master.php?o=administrator-view"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row center">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info modal-content">
                    <div class="panel-heading">
                        Bed edit form
                    </div>
                    <div class="panel-body">
                         <?php
                        $sc = new dalBed();
                        $sc->Id = $_GET['id'];
                        $data = $sc->edit();
                        ?>
                        <form role="form" action="master.php?o=bed-update" method="post">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label> Bed Number<i style="color: red">*</i></label>
                                <input class="form-control" name="num" type="text" value="<?php echo $data->number; ?>" >
                                <p class="help-block">Please type your bed number.</p>
                            </div>
                            <div class="form-group">
                                <label> Select Room name<i style="color: red">*</i></label>
                                <select class="form-control" name="room" value="<?php echo $data->roomid; ?>">
                                    <?php
                                    $ddown = new dalRoom;
                                    Dropdown($ddown->view(), 0);
                                    ?>
                                </select>
                                <p class="help-block">Please select room name.</p>
                             </div>
                            <div class="form-group">
                                <label> Amount<i style="color: red">*</i></label>
                                <input class="form-control" type="text" name="amu" value="<?php echo $data->amount; ?>">
                                <p class="help-block">Please bed rent amount per day.</p>
                            </div>
                                
                            <input type="submit" name="sub" value="Update" class="btn btn-success"/>
                            <input type="reset" name="cancel" value="Reset" class="btn btn-danger"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>