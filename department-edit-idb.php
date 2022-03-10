<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">department-edit</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        department edit
                    </div>
                    <div class="panel-body">
                        <?php
                        $sc = new dalDepartment();
                        $sc->Id = $_GET['id'];
                        $data = $sc->edit();
                        ?>
                        <form role="form" method="post" action="master.php?o=department-update">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <input type="submit"  name="sub" value= "Update" class="btn btn-success"/>
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






