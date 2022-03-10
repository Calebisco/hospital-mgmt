<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Diagnosis-Test</h1>
                <a href="master.php?o=diagnosis-test-new"><i class="btn btn-success fa fa-pe"> New Entry</i></a>
                <a href="master.php?o=diagnosis-test-view"><i class="btn btn-success fa fa-pencil"> View</i></a>
                <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Add New Diagnosis Test Entry FORM
                    </div>
                    <div class="panel-body">
                        <?php
                        $sc = new dalDiagnosisTest();
                        $sc->Id = $_GET['id'];
                        $data = $sc->edit();
                        ?>
                        <form role="form" action="master.php?o=diagnosis-test-update" method="post">
                            <input type="hidden" name="id" value="<?php echo $data->id; ?>"/>
                            <div class="form-group">
                                <label>Diagnosis Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" type="text" name="amount" value="<?php echo round($data->amount); ?>">
                            </div>
                            <div class="form-group">
                                <label>Discount</label>
                                <input class="form-control" type="text" name="dis" value="<?php echo round($data->discount); ?>">
                            </div>
                            <div class="form-group">
                                <label>Vat</label>
                                <input class="form-control" type="text" name="vat" value="<?php echo round($data->vat); ?>">
                            </div>

                            <button onclick="Update()" name="sub" class="btn btn-success btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>




