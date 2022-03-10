<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Feedback-veiw</h1>
                <h1 class="page-subhead-line"></h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Submit your feedback</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="submitphoto_form" method="post" action="index.php?u=feedback-insert" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>User</label>
                                            <select name="user" class="form-control">
                                                <?php
                                                $t = new dalPatien();
                                                Dropdown($t->GlobalView("users", "id, name", "name asc"), 0);
                                                ?>
                                            </select>
                                        </div>   
                                        <div class="form-group">
                                            <label>Ratings</label>
                                            <select class="form-control" name="rating">
                                                <option value="Excellent">Excellent</option>
                                                <option value="Good">Good</option>
                                                <option value="Not Bad">Not Bad</option>
                                                <option value="Bad">Bad</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <label>Description</label><br>
                                            <textarea  name="desr" class="wp-form-control wpcf7-textarea" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>date</label>
                                            <input type="text" name="date"  class="form-control" id="datepicker" placeholder="Date">
                                        </div>
                                        <input type="submit"  name="sub" value= "Submit" class="btn btn-success"/>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        Feedback-veiw
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-success"><a href="index.php?u=feedback-new">Give Your Feedback</a></button>
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                <th>User</th>
                                <th>Rating</th>
                                <th>description</th>
                                <th>Date</th>
                            </tr> 
                            <?php
                            $fd = new dalFeedback();
                            Table3($fd->view(), "o=feedback");
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







