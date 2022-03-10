<div id="page-wrapper">
    <div id="page-inner" class="modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Change Password </h1>
                <h1 class="page-subhead-line"> </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Change Password
                    </div>
                    <div class="panel-body">                        
                        <form action="master.php?u=changepassword-update" method="post" enctype="multipart/form-data">
                           
                            <div class="form-group">
                                <label>Current Password:</label>
                                <input type="password" class="form-control" name='pass' />
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>New Password:</label>
                                <input type="password" class="form-control" name='pass1' />
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Retype Password:</label>
                                <input type="password" class="form-control" name='pass2' />
                                <p class="help-block"></p>
                            </div>

                            <input type="submit" class="btn btn-success" name='sub' value=' Save ' />

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--/.ROW-->


    </div>
    <!-- /. PAGE INNER  -->
</div>