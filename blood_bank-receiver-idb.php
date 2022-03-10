<title>IDB Hospital | Bloog Receiver</title>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-head-line">Blood Receive</h3>
                <a href="master.php?o=bloodbank-view"><i class="btn btn-success fa fa-file"> Blood Bank</i></a>
                <a href="master.php?o=blood_bank_receiver_view"><i class="btn btn-success fa fa-file"> Blood Receiver</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row center">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info modal-content">
                    <div class="panel-heading">
                        Blood Receiver information form
                    </div>
                    <div class="panel-body">
                         <?php
                        $bd = new dalBloodbank();
                        $bd->Id = $_GET['id'];
                        $data = $bd->Donate();
                        ?>
                        <form role="form" action="master.php?o=blood_bank_receive_insert" method="post">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label> Blood Pack Number<i style="color: red">*</i></label>
                                <input class="form-control" name="pack" type="text" value="<?php echo $data->id; ?>" >
                            </div>
                             <div class="form-group">
                                <label> Blood Group<i style="color: red">*</i></label>
                                <input class="form-control" name="group" type="text" value="<?php echo $data->blood_group; ?>" >
                            </div>
                            <div class="form-group">
                                <label> Blood Receiver name (patient)<i style="color: red">*</i></label>
                                <select class="form-control" name="receive">
                                     <?PHP
                                    $v = new dalMedicine();
                                    Dropdown( $v->GlobalView("users", "id,name", "name asc"),0);
                                    ?>
                                </select>
                            </div>
                             <div class="form-group">
                                <label> Bed number (patient)<i style="color: red">*</i></label>
                                <select class="form-control" name="bed">
                                     <?PHP
                                    $v = new dalMedicine();
                                    Dropdown( $v->GlobalView("bed", "id,number name", "name asc"),0);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Blood price<i style="color: red">*</i></label>
                                <input  type="text" name="price" class="form-control">
                            </div>
                           <div class="form-group">
                                <label> Blood service charge<i style="color: red">*</i></label>
                                <input  type="text" name="push" class="form-control">
                           </div>
                            <button class="btn btn-success" name="sub" ><i class="fa fa-tint" style="color:red"></i> Donate</button>
                            <input type="reset" name="cancel" value="Reset" class="btn btn-danger"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>