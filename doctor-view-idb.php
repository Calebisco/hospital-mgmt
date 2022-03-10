<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Doctor Information-veiw</h1>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Doctor Information-veiw

                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Contact</th>
                                 <th>Fees</th>
                                 <th>Visit_start_hour</th>
                                 <th>Visit_end_hour</th>
                                 <th>Details</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                            </tr> 
                            <?php
                            $doc = new dalDoctor();
                            Table($doc->GlobalView("doctor", "id, name, email, contact, fees, visit_start_hour, visit_end_hour, details", "name asc"),"o=doctor");
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







