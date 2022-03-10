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
                <h3 class="page-head-line">Administrator View</h3>
                <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
                <a href="master.php?o=administrator-new" title="Administrator new entry"><i class="btn btn-success fa fa-pencil"> New Admin</i></a>
                <a href="master.php?o=administrator-edit" title="Edit administrator"><i class="btn btn-success fa fa-edit"> Edit</i></a>
                <a href="master.php?o=administrator-view" title="Delete administrator"><i class="btn btn-danger fa fa-trash"> Delete</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-sm-12" id="printableArea">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Administrator List
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover" with="100%" border="1" cellpadding="5" cellspacing="0">
                            <tr>
                                <th class="text-center"><i class="fa fa-sort"></i> Bed Number</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Room Name</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Bed Rent(per day)</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Edit</th>
                                <th class="text-center"><i class="fa fa-sort"></i> Delete</th>
                            </tr>
                            <?php
                            $bed = new dalBed();
                            Table($bed->GlobalView("bed", "id, number,roomid,amount", "number asc"),"o=bed");
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>