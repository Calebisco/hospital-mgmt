<title>IDB Hospital | Medicine view</title>

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
                <h1 class="page-head-line">Medicine-view</h1>
                <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
                <a href="master.php?o=medicine-new" title="diagnosis-invoice"><i class="btn btn-success fa fa-pencil"> Medicine New Entry</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="c col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                <div class="panel panel-info" id="printableArea">
                    <div class="panel-heading">
                            Medicine's List
                        </div>
                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover" width="100%">
                            <tr>

                                <th class="text-center">Name</th>
                                <th class="text-center">Generi id</th>
                                <th class="text-center">Strips</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>


                            </tr> 
                            <?php
                            $mc = new dalMedicine();
                            Table($mc->view(), "o=medicine");
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







