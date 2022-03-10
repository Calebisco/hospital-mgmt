<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
   $(function() {
      $("#datepicker,#datepicker2").datepicker({dateFormat: "yy-mm-dd"}).val();
   });
</script>

<link rel="stylesheet" type="text/css" href="assets/js/jquery.tokenize.css" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tokenize.js"></script>

<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-head-line">Patient Admit</h3>
                <a href="master.php?o=admission-view"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row center">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Patient admit form
                    </div>
                    <div class="panel-body">
                        <form role="form" action="master.php?o=admission-insert" method="post">
                            <div class="form-group">
                                <label> Select Bed No<i style="color: red">*</i></label>
                                <select class="form-control" name="bdn">
                                    <?php
                                    $v = new dalBed();
                                    $allBed = $v->GlobalView("bed", "bed.id, number name", "number asc");
                                    $allFree = $v->GlobalView("admission where re_day='0000-00-00'", "bedid", "id asc");                 
                                    foreach ($allBed as $bed){
                                        $c = 0;
                                        foreach ($allFree as $free){
                                            if($free->bedid == $bed->id){
                                                $c++;
                                            }
                                        }
                                        if($c==0){
                                            echo "<option value=\"{$bed->id}\">{$bed->name}</option>";
                                        }
                                    }
                                    
                                    ?>
                                
                                </select>
                                <p class="help-block">Please select Bed No.</p>
                             </div>
                            <div class="form-group">
                                <label> Select Doctor Name<i style="color: red">*</i></label>
                                <select class="form-control" name="don">
                                    <?php
                                    $v = new dalDoctor();
                                    Dropdown( $v->GlobalView("doctor", "id,name", "name asc"),0);
                                    ?>
                                </select>
                                <p class="help-block">Please select doctor name.</p>
                             </div>
                            <div class="form-group">
                                <label> Select Patient Name<i style="color: red">*</i></label>
                                <select class="form-control" name="ptn">
                                    <?php
                                    $v = new dalPatien();
                                    $user = $v->GlobalView("users where type='u'", "id,name", "name asc");
                                    $allFree = $v->GlobalView("admission where re_day='0000-00-00'", "userid", "id asc");                 
                                    foreach ($user as $bed){
                                        $c = 0;
                                        foreach ($allFree as $free){
                                            if($free->userid == $bed->id){
                                                $c++;
                                            }
                                        }
                                        if($c==0){
                                            echo "<option value=\"{$bed->id}\">{$bed->name}</option>";
                                        }
                                    }
                                    
                                    
                                    ?>
                                </select>
                                <p class="help-block">Please select patient name.</p>
                             </div>
                            <div class="form-group">
                                <label> Admission Date<i style="color: red">*</i></label>
                                <input class="form-control" type="text" name="add" id="datepicker">
                                <p class="help-block">Please type your bed number.</p>
                            </div>
                                
                            <input type="submit" name="sub" value="Save" class="btn btn-success"/>
                            <input type="reset" name="cancel" value="Reset" class="btn btn-danger"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>