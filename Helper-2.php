<div class="row">
    <div class="col-sm-12" id="printableArea">
        <div class="col-sm-12 font-gray pull-right form-group"><h3>Sales Invoice</h3><hr>
            <img src="assets-front/images/logo.png" alt="logo" class="col-sm-1" /><h4 class="col-sm-3 font-black">IDB HOSPITAL</h4>
        </div><hr>

        <?php
        $sm = new dalSaleMedicine();
        $sm->PatientId = $_GET['uid'];
        $sm->Date = $_GET['date'];
        $data = $sm->view_report_details();

        foreach ($data as $dt) {
            ?>
            <div class="col-sm-6 text-justify">
                <p>Care | Health | Long life</p>
                <p>Address: Agargaon, Rokeya shoroni, Dhaka-1212</p>
                <p>Contact: 029645875</p>
                <p>Email: idb@idbhospital.com</p>
                <p>Web: www.idbhospital.com</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>Patient Name: <?php echo $dt->name ?></p>
                    <p>Address: </p>
                </div>
                <div class="col-sm-6">
                    <p>Age: </p>
                    <p>Bed No: </p>
                    <p>Admission Date: </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Doctor Reference: </p>
                    <p>Mode of payment: On cash </p>
                </div>

            </div>
            <table class="table table-striped table-responsive table-hover">
                <tr>
                    <th>Serial</th>
                    <th>Particulars</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Discount</th>
                    <th>Amount</th>
                </tr>
                <?php
                $total = 0;
                $c = 1;
                foreach ($data as $d) {
                    ?>
                    <tr>
                        <td><?php echo "#" . $c++; ?></td>
                        <td><?php echo $d->mname ?></td>
                        <td><?php echo $d->price ?></td>
                        <td><?php echo $d->quantity ?></td>
                        <td>5</td>
                        <td>
                            <?php
                            $amt = $d->price * $d->quantity;
                            echo $amt;
                            $total += $amt;
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <tr>
                    <td colspan="4"></td>
                    <td>Sub Total</td>
                    <td>145</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td>Tax rate</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td>Tax</td>
                    <td>170</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td>Payment Made</td>
                    <td>170</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td>Total Bill</td>
                    <td><?php echo $total; ?></td>
                </tr>

            </table>
            <?php
            break;
        }
        ?>
    </div>
</div>