<div id="page-wrapper">
    <div id="page-inner" class="modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">New Notice</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                      Notice
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="master.php?o=notice-insert" enctype="multipart/form-data">
                             <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                              <textarea  class="form-control" name="desr"></textarea>
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group modal-content panel-body">
                                <label>Picture</label>
                                <input type="file" name="pic">
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





