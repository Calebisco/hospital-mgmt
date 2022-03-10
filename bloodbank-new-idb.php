<title>IDB Hospital | Bloog bank</title>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Blood Bank Information</h1>
                  <a href="master.php?o=bloodbank-view"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class=" col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Blood Bank Donar Entry FORM
                    </div>
                    <div class="panel-body">
                        <form role="form" action="master.php?o=bloodbank-insert" method="post">
                            <div class="form-group">
                                <label>Donar Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input class="form-control" type="text" name="con">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="add">
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <select name="blood"  class="form-control"> 
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            <input type="submit" value="Save" name="sub" class="btn btn-success">
                        </form>
                    </div>
                </div>

            </div>



