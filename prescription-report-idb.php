<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Prescription View</h1>
                <a href="master.php?o=prescription-new" title="invoice create"><i class="btn btn-success fa fa-pencil"> New Prescription</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel invoice entry"> Cancel</i></a><hr>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Prescription List
                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                <th>Customer Name</th>
                                 <th>Date Time</th>
                                <th>View Invoice</th>
                            </tr> 
                            <?php
                            $v = new dalPrescription();
                            $data = $v->view_report();
                            foreach ($data as $dt){
                                echo "<tr>";
                                echo "<td>{$dt->date}</td>";
                                echo "<td>{$dt->name}</td>";
                                 echo "<td><a href=\"master.php?o=prescription-print-view&uid={$dt->id}&date={$dt->date}\"><i class='fa fa-binoculars btn btn-success'></i></a></td>";
                                echo "</tr>";
                            }
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

