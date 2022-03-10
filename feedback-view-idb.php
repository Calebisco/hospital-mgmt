<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Feedback-veiw</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       Feedback-veiw

                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>

                                <th>User</th>
                                <th>Rating</th>
                                <th>description</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>


                            </tr> 
                            <?php
                            $fd = new dalFeedback();
                            Table($fd->view(),"o=feedback");
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







