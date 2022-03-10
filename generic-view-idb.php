<title>IDB Hospital | Generic view</title>

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
                <h1 class="page-head-line">Generic-veiw</h1>
                 <a href="javascript:void(0);" onclick="printPageArea('printableArea')" title="Print document"><i class="btn btn-success fa fa-print"> Print</i></a>
                <a href="master.php?o=generic-new" title="diagnosis-invoice"><i class="btn btn-success fa fa-pencil">Medicine Generic Entry</i></a>
                <a href="master.php"><i class="btn btn-danger fa fa-times" title="Cancel administrator entry"> Cancel</i></a>
                <h1 class="page-subhead-line"></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 "  id="printableArea">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Generic's List
                    </div>
                    <div class="panel-body">
                        <table class=" table  table-striped  table-hover table-responsive">
                            <tr>
                                
                                  <th>Name</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                    
                                
                            </tr> 
                            <?php
                            $gc = new dalGeneric();
                           
                            Table($gc->view(),"o=generic");
                                
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







