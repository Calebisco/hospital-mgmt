<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Medicine-edit</h1>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       Medicine edit
                    </div>
                    <div class="panel-body">
                        <?php
                        $mc = new dalMedicine();
                        $mc->Id = $_GET['id'];
                        $data = $mc->edit();
                        ?>
                        <form role="form" method="post" action="master.php?o=medicine-update">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label>Medicine Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
                                <p class="help-block"></p>
                            </div>
                              <div class="form-group">
                                <label>Generic</label>
                               <select name="genericid" class="form-control">
                                    <?PHP
                                    $v = new dalMedicine();
                                    Dropdown( $v->GlobalView("generic", "id,name", "name asc"),0);
                                   
                                    ?>
                                </select>
                                <p class="help-block"></p>
                            </div>
                              <div class="form-group">
                                <label>Strips </label>
                                <input class="form-control" type="text" name="stp" value="<?php echo $data->strips; ?>">
                                <p class="help-block"></p>
                            </div>
                              <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="text" name="price" value="<?php echo $data->price; ?>">
                                <p class="help-block"></p>
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






