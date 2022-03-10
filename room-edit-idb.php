<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Room-Edit</h1>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Room
                    </div>
                    <div class="panel-body">
                        <?php
                        $sc = new dalRoom();
                        $sc->Id = $_GET['id'];
                        $data = $sc->edit();
                        ?>
                        <form role="form" method="post" action="master.php?o=room-update">
                            <input class="form-control" type="hidden" name="id" value="<?php echo $data->id;?>" />
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $data->name;?>"/>
                                <p class="help-block">Help text here.</p>
                            </div>
                            <input type="submit"  name="sub" value= "update" class="btn btn-success"/>
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





