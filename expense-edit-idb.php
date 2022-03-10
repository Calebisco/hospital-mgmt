<title>IDB Hospital | Expense Edit</title>

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
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Expense Update Information</h1>
                <a href="master.php?o=expense-new" ><i class="btn btn-success fa fa-binoculars"> New entry</i></a>
                <a href="master.php?o=expense-view"><i class="btn btn-success fa fa-binoculars"> View</i></a>
               <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
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
                        <?php
                        $ex = new dalExpense();
                        $ex->Id = $_GET['id'];
                        $data = $ex->edit();
                        ?>
                        <form role="form" method="post" action="master.php?o=expense-update">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <?php
                            
                            $_SESSION['myid'];
                            
                            ?>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $data->title;?>">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="des" class="form-control" ><?php echo $data->description;?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" name="amount" value="<?php echo $data->amount;?>"/>
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="text" id="datepicker" name="expensedate" value="<?php echo $data->date;?>">
                            </div>


                            <input type="submit" onclick="Update()"   name="sub" value= "Update" class="btn btn-success"/>
                            <input onclick="Reset()" type="reset" name="cancel" value="Reset" class="btn btn-warning"/>
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






