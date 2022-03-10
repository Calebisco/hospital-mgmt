<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Medicine name</h1>
                 <a href="master.php?o=medicine-view" title="diagnosis-invoice-report"><i class="btn btn-success fa fa-list-alt"> View List</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       Medicine name
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="master.php?o=medicine-insert" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Medicine name</label>
                                <input class="form-control" type="text" name="name">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Generic</label>
                                <select name="genericid" class="form-control">
                                    <?PHP
                                    $v = new dalMedicine();
                                    Dropdown( $v->GlobalView("generic", "id,name", "name asc"),0);
                                   
                                    ?>
                                </select>
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Strips </label>
                                <input class="form-control" type="text" name="stp">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Price </label>
                                <input class="form-control" type="text" name="price">
                                <p class="help-block"></p>
                            </div>
                            <input type="submit"  name="sub" value= "Save" class="btn btn-success"/>
<i
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--/.ROW-->


    </div>
    <!-- /. PAGE INNER  -->
</div>





