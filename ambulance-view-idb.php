<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Ambulance Information-veiw</h1>
                <a href="master.php?o=ambulance-new"><i class="btn btn-success fa fa-file"> New Entry</i></a>
                <a href="master.php"><i onclick="Cancel()" class="btn btn-danger fa fa-times"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Ambulance Information-veiw

                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                
                                 <th>Vehicle No</th>
                                 <th>Staff Name</th>
                                <th>Edit</th>
                                  <th>Delete</th>
                                
                            </tr> 
                            <?php
                            $am = new dalAmbulance();
                           
                            Table($am->view(),"o=ambulance");
                                
                            ?>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!--/.ROW-->


    </div>
    <!-- /. PAGE INNER  -->
</div>







<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

