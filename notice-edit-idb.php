<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">notice-edit</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       Notice edit
                    </div>
                    <div class="panel-body">
                        <?php
                        $sc = new dalNotice();
                        $sc->Id = $_GET['id'];
                        $data = $sc->edit();
                        ?>
                        <form role="form" method="post" action="master.php?o=notice-update" enctype="multipart/form-data">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="text" name="title" value="<?php echo $data->date; ?>">
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="<?php echo $data->title; ?>">
                                <p class="help-block"></p>
                            </div>
                             <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"  name="desr" value=""><?php echo $data->description; ?></textarea>
                                <p class="help-block"></p>
                            </div>
                             <div class="form-group">
                                <label>Picture</label>
                                <input class="form-control" type="file" name="pic" value="">
                                <td><img style='width:100px; height:80px;' src="<?php echo 'images/notice/notice-'.$data->id.".".$data->picture; ?>"/></td>
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






