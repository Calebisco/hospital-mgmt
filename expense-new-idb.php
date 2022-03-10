<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker({dateFormat: "yy-mm-dd"}).val();
    });
</script>

<link rel="stylesheet" type="text/css" href="assets/js/jquery.tokenize.css" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tokenize.js"></script>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Expense Information</h1>
                <a href="master.php?o=expense-view"><i class="btn btn-success fa fa-binoculars"> View</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>
                
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Expense Entry Form
                    </div>
                    <div class="panel-body">

                        <form role="form" method="post" action="master.php?o=expense-insert">
                            <?php
                            $_SESSION['myid'];
                            ?>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="name">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="des" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="$"/>
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="text" id="datepicker" name="expensedate" placeholder="y-m-d">
                            </div>


                            <input type="submit"  name="sub" value= "Save" class="btn btn-success fa fa-save"/>
                            <input type="reset" name="cancel" value="Reset" class="btn btn-warning fa fa-refresh"/>
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





