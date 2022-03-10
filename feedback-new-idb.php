
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({dateFormat: "yy-mm-dd"}).val();
    });
</script>

<link rel="stylesheet" type="text/css" href="assets/js/jquery.tokenize.css" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tokenize.js"></script>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6">
                <div class="contact-form">
                    <div class="section-heading">

                        <div class="line"></div>
                       
                    </div>
                     <h2>Give Your Important feedback</h2>
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
            </div>
        </div>
    </div>
</section>>