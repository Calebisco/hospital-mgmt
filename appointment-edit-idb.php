<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Appointment-edit</h1>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Appointment edit
                    </div>
                    <div class="panel-body">
                        <?php
                        $ap = new dalAppointment();
                        $ap->Id = $_GET['id'];
                        $apdata = $ap->edit();
                        ?>
                        <form role="form" method="post" action="master.php?u=appointment-update" enctype="multipart/form-data">
                            <input  type="hidden" name="id" value="<?php echo $data->id; ?>">
                             <div class="form-group">
                        <select name="specialty" id="dep" class="form-control" value="<?php echo $apdata->specialtyid; ?>">
                            <option value="0">Choose Specialty</option>
                            <?php
                            $sp = new dalSpecialty();
                            $data = $sp->GlobalView("specialty", "*", "name asc");
                            foreach ($data as $value) {
                                echo "<option value=\"{$value->id}\">{$value->name}</option>";
                            }
                            ?>
                        </select><br/><br/>
                         </div>
                         <div class="form-group">
                        <select name="doctor" id="doc" class="form-control" value="<?php echo $apdata->doctorid; ?>">
                            <option value="0">Choose Doctor</option>
                        </select><br/><br/>
                        </div>
                        <div class="form-group">
                        <select name="visitday" id="day" class="form-control" value="<?php echo $apdata->visitdayid; ?>">
                            <option value="0">Choose Day</option>
                        </select><br/><br/>
                        </div>
                        <div class="form-group">
                        <input type="text"  name="name" class="form-control"  placeholder="Patient name"  value="<?php echo $apdata->patient_name; ?>"/><br/>
                        </div>
                        <div class="form-group">
                        <input type="text" name="email" class="form-control"  placeholder="Patient Email"  value="<?php echo $apdata->patient_email; ?>" /><br/>
                        </div>
                        <div class="form-group">
                        <input type="text"  name="address" class="form-control" placeholder="Patient address"  value="<?php echo $apdata->patient_address; ?>"/><br/>
                        </div>
                        <div class="form-group">
                        <input type="text" name="Phone" class="form-control"  placeholder="Patient Phone Number"  value="<?php echo $apdata->patient_phone_no; ?>"/><br/>
                        </div>
                        <div class="form-group">
                        <label>Gender</label><br/>
                        <input type="radio" name="gender"  class="form-group" value="Male" /><span class="fa fa-male"> Male</span><br/>
                        <input type="radio" name="gender" class="form-group"  value="Female" /><span class="fa fa-female"> Female</span><br/>
                        <input type="radio" name="gender" class="form-group"  value="Other" /><span class="fa fa-users"> Other</span><br/>
                        </div>
                        <div class="form-group">
                        
                        <input type="text" name="age"  class="form-control"  placeholder="Patient Age"  value="<?php echo $apdata->patient_age; ?>"/><br/>
                       </div>
                       <div class="form-group">
                        <textarea  name="reason" class="form-control" placeholder="Reason of Appointment"><?php echo $apdata->reason_of_appointment; ?></textarea><br/>
                        </div>
                     
                        <input type="submit"  name="sub" value= "Update an appointment" class="btn btn-success"/>

                        </form>
                    </div>
                    
                </div>
                 <script>
                $(document).ready(function() {
                    $("#dep").change(function() {
                        var spid = parseInt($("#dep").val());
                        if (spid == 0) {
                            $("#doc").html("<option value='0'>Choose Doctor</option>")
                        }
                        else {
                            var datalist = "id=" + spid;
                            $.ajax({
                                type: 'POST',
                                data: datalist,
                                url: "dal/ajax-doctor.php",
                                success: function(data) {
                                    $("#doc").html(data);
                                }
                            });
                        }
                    });


                    $("#doc").change(function() {
                        var docid = parseInt($("#doc").val());
                        if (docid == 0) {
                            $("#day").html("<option value='0'>Choose Day</option>")
                        }
                        else {
                            var datalist = "id=" + docid;
                            $.ajax({
                                type: 'POST',
                                data: datalist,
                                url: "dal/ajax-day.php",
                                success: function(data) {
                                    $("#day").html(data);
                                }
                            });
                        }
                    });
                });
            </script>
            </div>

        </div>
        <!--/.ROW-->


    </div>
    <!-- /. PAGE INNER  -->
</div>






