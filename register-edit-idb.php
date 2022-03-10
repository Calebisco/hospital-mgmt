<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Register-edit</h1>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       Register edit
                    </div>
                    <div class="panel-body">
                        <?php
                        $pa = new dalPatien();
                        $pa->Id = $_GET['id'];
                        $data = $pa->edit();
                        ?>
                        <form role="form" method="post" action="master.php?u=register-update"  enctype="multipart/form-data">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
                            </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="mail" name="email" value="<?php echo $data->email; ?>">
                            </div>
                             <div class="form-group">
                                <label>Type</label>
                                <input class="form-control" type="password" name="type" value="<?php echo $data->type; ?>">
                        
                            </div>
                            
                            <div class="form-group">
                                <label>Address</label>

                               <textarea name="add" class="form-control " value="" ><?php echo $data->address; ?></textarea>
                            </div>
                             <div class="form-group">
                                <label>Contact</label>
                                <input class="form-control" type="text" name="cont" value="<?php echo $data->contact; ?>">
                        
                            </div>
                             <div class="form-group">
                                <label>Gender</label><br/>
                                <input class="form-control" type="text" name="gen" value="<?php
                                if($data->gender==1){
                                    echo "Male";
                                    
                                }
                                else if($data->gender==2){
                                  echo "Female";  
                                }
                                 else if($data->gender==3){
                                  echo "Common";  
                                };
                                ?>">
                        
                            </div>
                             <div class="form-group">
                                <label>Picture</label>
                                <input class="form-control" type="file" name="pic" value="<?php echo $data->picture; ?>">
                         <td><img style='width:100px; height:80px;' src="<?php echo 'images/users/users-'.$data->id.".".$data->picture; ?>"/></td>
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






