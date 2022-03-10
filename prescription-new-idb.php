<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Prescription</h1>
                <a href="master.php?o=prescription-report"><i class="btn btn-success fa fa-file"> View</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times"> Cancel</i></a><hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-sm-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Create Prescription
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="master.php?o=prescription-insert">
                            <div class="form-group">
                                <label>Consultant</label>
                                <select class="form-control" name="doc">
                                    <?php
                                    $doc = new dalDoctor();
                                    Dropdown($doc->GlobalView("doctor", "id,name", "name asc"), 0);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Patient</label>
                                <select class="form-control" name="ptn">
                                    <?php
                                    $patient = new dalPatien();
                                    Dropdown($patient->GlobalView("users where type='u'", "id,name", "name asc"), 0);
                                    ?>
                                </select>
                            </div><hr>
                            <?php
                            for ($i = 1; $i <= 6; $i++) {
                                ?>
                                <div class="form-group">                                
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <label>Medicine</label>
                                            <select class="form-control medicine" name="medicine[]">
                                                <option value="0">Choose Medicine</option>
                                                <?php
                                                $v = new dalMedicine();
                                                Dropdown($v->GlobalView("medicine", "id, name", "name"), 0);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Quantity</label>
                                            <input type="tel" name="qty[]" id="qty-<?php echo $i ?>" value="0" class="form-control" />
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Morning</label>
                                            <input type="text" name="dmor[]" id="qty-<?php echo $i ?>" value="0" class="form-control" />  
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Midday</label>
                                            <input type="text" name="dmid[]" id="qty-<?php echo $i ?>" value="0" class="form-control" />   
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Night</label>
                                            <input type="text" name="dnig[]" id="qty-<?php echo $i ?>" value="0" class="form-control" />   
                                        </div>
                                        <div class="col-sm-2">
                                            <label>Before/After</label>
                                            <select class="form-control medicine" name="meal[]">
                                                <option value="a">After meal</option>
                                                <option value="b">Before meal</option>
                                                <option value="a">Continue</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <input type="submit"  name="sub" value= "Save" class="btn btn-success"/>
                            <input type="reset"  name="res" value= "Reset" class="btn btn-danger"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>