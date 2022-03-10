<title>IDB Hospital | Appointment view</title>

<script type="text/javascript">
    function printPageArea(areaID) {
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>
<div id="page-wrapper">
    <div id="page-inner" class=" modal-content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Appointment-veiw</h1>
                <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class=" col-sm-12 col-sm-offset-0"  id="printableArea">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Appointment -veiw

                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover table-responsive" width="100%">
                            <tr class="panel-heading">
                                <th>Doctor</th>
                                <th>visitday</th>
                                <th>Patient Name</th>
                                <th>Patient Email</th>
                                <th>Patient Address</th>
                                <th>Patient Phone No</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr> 
                            <?php
                            $ap = new dalAppointment();
                            $data = $ap->view();
                            foreach ($data as $dt) {
                                echo "<tr class=\"form-group panel-head\">";
                                echo "<td>$dt->dname</td>";
                                echo "<td>$dt->day</td>";
                                echo "<td>$dt->patient_name</td>";
                                echo "<td>$dt->patient_email</td>";
                                echo "<td>$dt->patient_address</td>";
                                echo "<td>$dt->patient_phone_no</td>";
                                echo "<td><a href = \"master.php?u=appointment-edit&id=$dt->id\"><i class=\"fa fa-pencil-square btn btn-success\"></i>
</a></td>";
                                echo "<td><a href = \"master.php?u=appointment-delete&id=$dt->id\"><i class=\"fa fa-trash btn btn-danger\"></i></a></td>";
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







