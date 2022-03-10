<title>IDB Hospital | Diagnosis Test Name</title>
<div id="page-wrapper">
    <div id="page-inner" class="modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Diagnosis-Test</h1>
                <a href="master.php?o=diagnosis-test-view"><i class="btn btn-success fa fa-file"> View</i></a>
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
                        <form role="form" action="master.php?o=diagnosis-test-insert" method="post">
                            <div class="form-group">
                                <label>Diagnosis Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" type="text" name="amount">
                            </div>
                            <div class="form-group">
                                <label>Discount</label>
                                <input class="form-control" type="text" name="dis">
                            </div>
                            <div class="form-group">
                                <label>Vat</label>
                                <input class="form-control" type="text" name="vat">
                            </div>

                            <button onclick="Save()" name="sub" class="btn btn-success btn-sm">Save</button>
                            <input onclick="Reset()" type="reset" name="cancel" value="Reset" class="btn btn-danger btn-sm"/>
                        </form>
                    </div>
                </div>
            </div>

        </div>




