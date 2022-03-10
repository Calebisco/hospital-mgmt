<link rel="stylesheet" type="text/css" href="assets/css/jquery.tokenize.css" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tokenize.js"></script>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
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
                        <form role="form" action="master.php?o=doctor-insert" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input class="form-control" type="text" name="con">
                            </div>
                            <div class="form-group">
                                <label>Visiting Fees</label>
                                <input class="form-control" type="text" name="vfees">
                            </div>
                            <div class="form-group">
                                <label>Visiting Hour(Start)</label>
                                <input class="form-control" type="text" name="vstart">
                            </div>
                            <div class="form-group">
                                <label>Visiting Hour(End)</label>
                                <input class="form-control" type="text" name="vend">
                            </div>
                            <div class="form-group">
                                <label>Visiting Available Day</label>
                                <select id="tokenize_day" name="day[]" class="tokenize-sample" multiple="multiple" class="malta">
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                </select> 
                            </div>
                            <div class="form-group">
                                <label>Commission</label>
                                <input class="form-control" type="text" name="com">
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea name="details" class="form-control"></textarea>
                            </div>
                            <label>Speciality</label>
                            <div class="form-group">
                                <select id="tokenize_spe" name="skills[]" class="tokenize-sample" multiple="multiple" class="malta">
                                    <?php
                                    $spc = new dalSpecialty();
                                    $data = $spc->view();
                                    foreach ($data as $value) {
                                        echo "<option value=\"{$value->id}\">{$value->name}</option>";
                                    }
                                    ?>
                                </select>   
                            </div>
                            <input type="submit" value="Save" name="sub" class="btn btn-success">

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('select#tokenize_spe, select#tokenize_day').tokenize({displayDropdownOnFocus: true});
        </script>



