<link rel="stylesheet" type="text/css" href="assets/css/jquery.tokenize.css" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tokenize.js"></script>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Doctor Information</h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Add New Doctor Entry FORM
                    </div>
                    <div class="panel-body">
                     <?php
                        $sc = new dalDoctor();
                        $sc->Id = $_GET['id'];
                        $doc = $sc->edit();
                        ?>
                        <form role="form" action="master.php?o=doctor-update" method="post">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <input class="form-control" type="text" name="dname" value="<?php echo $doc->name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" value="<?php echo $doc->email; ?>">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input class="form-control" type="text" name="con" value="<?php echo $doc->contact; ?>">
                            </div>
                            <div class="form-group">
                                <label>Visiting Fees</label>
                                <input class="form-control" type="text" name="vfees" value="<?php echo $doc->fees; ?>">
                            </div>
                            <div class="form-group">
                                <label>Visiting Hour(Start)</label>
                                <input class="form-control" type="text" name="vstart" value="<?php echo $doc->visit_start_hour	; ?>">
                            </div>
                            <div class="form-group">
                                <label>Visiting Hour(End)</label>
                                <input class="form-control" type="text" name="vend" value="<?php echo $doc->visit_end_hour; ?>">
                            </div>
                            <div class="form-group">
                                <label>Commission</label>
                                <input class="form-control" type="text" name="com" value="<?php echo $doc->commission; ?>">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea name="details" class="form-control" value=""><?php echo $doc->details; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>

                                <select id="tokenize_spe" name="skills[]" class="tokenize-sample" multiple="multiple">
                                    <?php
                                        $spc = new dalSpecialty();
                                        $data = $spc->view();
                                        
                                        $ds = new dalDoctorSpecialty();
                                        $data2 = $ds->view($_GET['id']);
                                        
                                        
                                        foreach ($data as $value){
                                            $c = 0;
                                            foreach ($data2 as $value2){
                                                if($value->id == $value2->specialtyid){
                                                    $c++;
                                                    break;
                                                }
                                            }
                                            if($c>0){
                                                echo "<option value=\"{$value->id}\" selected>{$value->name}</option>";
                                            }
                                            else{
                                                echo "<option value=\"{$value->id}\">{$value->name}</option>";
                                            }
                                            
                                            
                                        }
                                    ?>
                                </select>   
                            </div>

                            <input type="submit" value="Update" name="sub" class="btn btn-success">

                        </form>
                    </div>
                </div>
            </div>

        </div>


        <script type="text/javascript">
            $('select#tokenize_spe').tokenize({displayDropdownOnFocus: true});
        </script>



