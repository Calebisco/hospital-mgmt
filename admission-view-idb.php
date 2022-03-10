<script type="text/javascript">
    function printPageArea(areaID){
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
            <div class="col-sm-12">
                <h3 class="page-head-line">Admitted Patient</h3>
                <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
                <a href="master.php?o=admission-new" title="Admission new entry"><i class="btn btn-success fa fa-pencil"> New Admission</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel Admission entry"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-sm-12" id="printableArea">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Patient List
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover" with="100%" border="1" cellpadding="5" cellspacing="0">
                            <tr>
                                <th class="text-center"><i class="fa fa-sort"></i> Bed Number</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Doctor Name</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Patient Name</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Admission Day</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Edit</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Delete</th>
                                 <th class="text-center"><i class="fa fa-sort"></i> Release</th>
                            </tr>
                            <?php
                            $adm = new dalAdmission();
                            Table2($adm->admitted(), "o=admission");
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>