 
<section id="blogArchive">      
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="container">
                <ol class="breadcrumb">
                    <li>You are here : </li>
                    <li><a href="index.php">Home</a></li>                  
                    <li class="active">Feedback</li>
                </ol>
                <div id="page-wrapper">
                    <div id="page-inner">

                        <div class="row">
                            <div class="c col-sm-12 ">
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <!-- *****Form Start******************************************************************************** -->
                                                <form class="submitphoto_form" method="post" action="index.php?u=feedback-insert" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Ratings</label>
                                                        <select class="form-control" name="rating">
                                                            <option value="1">Excellent</option>
                                                            <option value="2">Best</option>
                                                            <option value="3">Better</option>
                                                            <option value="4">Good</option>
                                                            <option value="5">Average</option>
                                                            <option value="6">No Comments</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label>Description</label><br>
                                                        <textarea  name="desr" class="wp-form-control wpcf7-textarea" ></textarea>
                                                    </div>
                                                    <input type="submit"  name="sub" value= "Submit" class="btn btn-success"/>
                                                </form>
                                                <!-- *****Form Start******************************************************************************** -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.ROW-->
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <div class="section-heading">
                    <h2>Feedback</h2>
                    <a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Leave a feedback</a>
                    <div class="line"></div>
                </div>
            </div>
        </div>        
    </div>      
</section>  
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="assets-front/images/feedback.png" class="img-responsive image-effect img-right popover-content"/>
            </div>
            <div class="col-sm-6">
                <div class="contact-form">
                    <?php
                    $fd = new dalFeedback();
                    $data = $fd->view();

                    foreach ($data as $d) {
                        //echo $d->name;
                        ?>
                        <table class="table table-responsive">
                            <tr>
                                <td class="col-sm-8 text-justify">
                                    <span>
                                        <?php
                                        if ($d->rating == 1) {
                                            echo "<img src=\"ratings/rat-1.png\" class='img-thumbnail image-responsive image-effect' />";
                                        } else if ($d->rating == 2) {
                                            echo "<img src=\"ratings/rat-2.png\" class='img-thumbnail image-responsive image-effect' />";
                                        } else if ($d->rating == 3) {
                                            echo "<img src=\"ratings/rat-3.png\" class='img-thumbnail image-responsive image-effect' />";
                                        } else if ($d->rating == 4) {
                                            echo "<img src=\"ratings/rat-4.png\" class='img-thumbnail image-responsive image-effect' />";
                                        } else if ($d->rating == 5) {
                                            echo "<img src=\"ratings/rat-5.png\" class='img-thumbnail image-responsive image-effect' />";
                                        } else if ($d->rating == 6) {
                                            echo "<img src=\"ratings/rat-6.png\" class='img-thumbnail image-responsive image-effect' />";
                                        }
                                        ?>

                                    </span>
                                    <i class="fa fa-calendar btn btn-default MovingShadow "> <b> | </b>  <?php echo $d->date; ?></i> <br>
                                    <?php
                                    echo "<p class='text-justify'> $d->description </p>";
                                    ?>
                                </td>
                                <td class="col-sm-2">
                                    <?php
                                    echo "<img src=\"images/users/users-{$d->uid}."."{$d->picture}\" class='img-thumbnail image-responsive' />";
                                    echo "<p class='text-center'> $d->name </p>";
                                    ?>
                                </td>
                            </tr>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>>
