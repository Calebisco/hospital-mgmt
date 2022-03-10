<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Food name</h1>
                <a href="master.php?o=canteen-view"><i class="btn btn-success fa fa-list-alt"> View List</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel "> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       Food entry form
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="master.php?o=canteen-insert">
                            <div class="form-group">
                                <label>Food name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Quentiry</label>
                                <input class="form-control" type="text" name="qty">
                            </div>
                             <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="text" name="price">
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





