<div id="page-wrapper">
    <div id="page-inner" class="modal-content">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-head-line">Welcome <?php echo $_SESSION['myname']; ?></h1>
                <div class="panel-body">
                    <?php
                    $p = new dalUsers();
                    $p->Id = $_SESSION['myid'];
                    $pdata = $p->edit();

                    // print_r($data);
                    ?>
                     <div class="col-sm-4">
                            <div class="modal-content panel-body col-sm-9">
                                <?php
                                $loc = "images/users/users-" . $_SESSION['myid'] . "." . $_SESSION['mypic'];
                                if (file_exists($loc)) {
                                    echo "<img src=\"{$loc}\" class='img-thumbnail image-responsive' />";
                                } else {
                                    echo "<img src=\"images/no-images.jpg\" class='img-thumbnail image-responsive' />";
                                }
                                ?>
                            </div>
                         <div class="panel-body pull-left">
                             <?php
                                  if ($pdata->type == 'a') {
                                            echo '<i class="fa fa-adn form-control fontcolor"> |  Administrator</i> ';
                                        } else if ($pdata->type == 'o') {
                                            echo '<i class="fa fa-fa-briefcase form-control fontcolor"> |  Operator</i> ';
                                        } else if ($pdata->type == 'u') {
                                            echo '<i class="fa fa-users form-control fontcolor"> | User</i> ';
                                        }
                             ?>
                         </div>
                        </div>
                    <div class="col-sm-8">
                        <style>.fontcolor{color: #00CA79;}</style>
                            <table class="table table-striped table-hover table-responsive">
                                 <tr>
                                    <td><i class="fa fa-send fontcolor btn btn-default"></i> Email Address : <?php echo $pdata->email; ?></td>                              
                                </tr>
                                 <tr>
                                    <td><i class="fa fa-home btn btn-default fontcolor contact-address"></i> Local Address : <?php echo $pdata->address; ?></td>                              
                                </tr>
                                 <tr>
                                    <td><i class="fa fa-phone-square btn btn-default fontcolor"></i> Cell contact  : <?php echo $pdata->contact; ?></td>                              
                                </tr>
                                <tr>
                                    <td><?php
                                        if ($pdata->gender == 1) {
                                            echo '<i class="fa fa-male btn btn-default fontcolor"></i>  Gender : Male';
                                        } else if ($pdata->gender == 2) {
                                            echo '<i class="fa fa-female btn btn-default fontcolor"></i>Gender : Female';
                                        } else if ($pdata->gender == 3) {
                                            echo '<i class="fa fa-users btn btn-default fontcolor"></i>Gender : Common';
                                        }
                                        ?></td> 
                                </tr><tr>
                            </table>
                        <a href="master.php?u=profile-edit" class="btn btn-success pull-right"><i class="fa fa-edit"> | </i> Edit</a>
                        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
