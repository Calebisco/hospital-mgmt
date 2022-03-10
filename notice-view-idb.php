<div id="page-wrapper" >
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Notice View</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Notice List

                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Picture</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $notice = new dalNotice();
                            $notice->view();
                            ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!--/.ROW-->


    </div>
    <!-- /. PAGE INNER  -->
</div>







