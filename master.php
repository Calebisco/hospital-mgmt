<?php
session_start();
if (!isset($_SESSION['myid'])) {
    header("Location: master.php");
}

require_once 'myFunction.php';
require_once 'dal/DB.php';
require_once 'dal/dalCategory.php';
require_once 'dal/dalSubCategory.php';
require_once 'dal/dalSpecialty.php';
require_once 'dal/dalNotice.php';
require_once 'dal/dalDiagnosisTest.php';
require_once 'dal/dalPatien.php';
require_once 'dal/dalDoctor.php';
require_once 'dal/dalDoctorSpecialty.php';
require_once 'dal/dalDepartment.php';
require_once 'dal/dalDesignation.php';
require_once 'dal/dalStaff.php';
require_once 'dal/dalVisitday.php';
require_once 'dal/dalGeneric.php';
require_once 'dal/dalMedicine.php';
require_once 'dal/dalAmbulance.php';
require_once 'dal/dalRoom.php';
require_once 'dal/dalBed.php';
require_once 'dal/dalTrip.php';
require_once 'dal/dalAppointment.php';
require_once 'dal/dalAdmission.php';
require_once 'dal/dalUsers.php';
require_once 'dal/dalSaleMedicine.php';
require_once 'dal/dalChangePassword.php';
require_once 'dal/dalFeedback.php';
require_once 'dal/dalDiagnosisInvoice.php';
require_once 'dal/dalExpense.php';
require_once 'dal/dalPrescription.php';
require_once 'dal/dalCash.php';
require_once 'dal/dalSalary.php';
require_once 'dal/dalBloodbank.php';
require_once 'dal/dalBlood_receiver-idb.php';
require_once 'dal/dalCanteen-idb.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <script>
            if (typeof (console.log) === "function")
                (document.title);
        </script>
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets-front/images/favicon.ico"/>
       
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!--CUSTOM BASIC STYLES-->
        <link href="assets/css/basic.css" rel="stylesheet" />
        <!--CUSTOM MAIN STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <!-- Message  -->
        <script type="text/javascript" src="assets/js/message.js"></script>
    </head>
    <body>

        <div class="control-label">
            <div class="row">
                <div class="col-sm-12">
                    <!-- ************************ Top Nav Start ************************-->
                    <section>
                        <div class="row">
                            <div class="col-sm-12">
                                <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                                    <div class="user-img-div" style="float: left;">
                                        <a class="navbar-brand" href="index.php"  target="_blank"><img src="assets-front/images/logo.png" alt="logo" width="200" /> IDB Hospital</a>
                                    </div>
                                    <div class="navbar-header">
                                        <div class="user-img-div">
                                            <div class="inner-text">
                                                <a href="master.php" style="text-decoration: none; color: #fff; ">
                                                    <?php
                                                    $loc = "images/users/users-" . $_SESSION['myid'] . "." . $_SESSION['mypic'];
                                                    if (file_exists($loc)) {
                                                        echo "<img src=\"{$loc}\" class='img-thumbnail' />";
                                                    } else {
                                                        echo "<img src=\"images/no-images.jpg\" class='img-thumbnail' />";
                                                    }
                                                    ?>
                                                </a>
                                                <small><?php echo $_SESSION['myname']; ?> </small>
                                            </div>
                                        </div>
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse">
                                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #fff; text-decoration: none;"><span class="fa fa-angle-down fa-2x btn btn-sm btn-success"></span></a>
                                                <ul class="dropdown-menu alert-success" role="menu"><hr><style>.icon{color: #009;}</style>
                                                        <li><a href="master.php?o=attendence-new"><i class="fa fa-check-square icon"></i> Attendance </a></li>
                                                        <li><a href="master.php?u=feedback-view"><i class="fa fa-question icon"></i> Feedback</a></li>
                                                        <li><a href="master.php?u=change-password"><i class="fa fa-edit icon"></i> Change password </a></li>
                                                        <li><a href = "master.php?o=notice-view"><i class = "fa fa-info-circle icon"></i> Notice</a></li>
                                                        <li><a href="master.php"><i class="fa fa-user-md icon"></i> Profile</a></li>
                                                        <li><a href="#"> <i class="fa fa-envelope icon"></i> Send Message</a></li><hr>
                                                            <li><a onclick="Logout()" href="logout.php" ><i class="fa fa-sign-out btn btn-danger"></i> Logout</a></li><hr>
                                                                </ul>
                                                                </li>
                                                                </ul>           
                                                                </div>
                                                                </nav>
                                                                </div>
                                                                </div>
                                                                </section>
                                                                <!-- ************************ Top Nav End ************************-->
                                                                <!-- ************************ Body Start ************************-->
                                                                <section>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <!-- ************************ Side Nave Start ************************-->
                                                                            <section>
                                                                                <div class="row">
                                                                                    <div class="col-sm-3">
                                                                                        <nav class="navbar-default navbar-side" role="navigation">
                                                                                            <div class="sidebar-collapse">
                                                                                                <ul class="nav" id="main-menu">
                                                                                                    <?php
                                                                                                    if ($_SESSION['mytype'] == 'a' ||'o') {
                                                                                                        ?>
                                                                                                        <li><a class="active"  href="master.php"><i class="fa fa-user "></i> Profile</a></li>
                                                                                                        <li><a href="#"><i class="fa fa-dollar "></i>Accounting Information <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=cash"><i class="fa fa-binoculars "></i>Cash Account report</a></li>
                                                                                                                <li><a href="master.php?o=expense-new"><i class="fa fa-bicycle "></i>Expense Entry</a></li>
                                                                                                                <li><a href="master.php?o=expense-view"><i class="fa fa-binoculars "></i>Expense View</a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-ambulance "></i>Ambulance Management <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=ambulance-new"><i class="fa fa-bicycle "></i>Ambulance Entry </a></li>
                                                                                                                <li><a href="master.php?o=ambulance-view"><i class="fa fa-list "></i>Ambulance List </a></li>
                                                                                                                <li><a href="master.php?o=trip-new"><i class="fa fa-bicycle "></i>Trip Entry</a></li>
                                                                                                                <li><a href="master.php?o=trip-view"><i class="fa fa-list-alt "></i>Trip List </a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-flask "></i>Diagnostics Management <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=diagnosis-test-new"><i class="fa fa-bicycle "></i> Diagnosis Test Entry</a> </li>
                                                                                                                <li><a href="master.php?o=diagnosis-test-view"><i class="fa fa-list "></i>Diagnosis Test List </a></li>
                                                                                                                <li><a href="master.php?o=diagnosis-invoice"><i class="fa fa-money "></i>Diagnosis Invoice</a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-medkit "></i>Pharmacy Management <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=generic-view"><i class="fa fa-list-alt "></i>Generic List </a></li>
                                                                                                                <li><a href="master.php?o=medicine-new"><i class="fa fa-bicycle "></i>Medicine Entry</a></li>
                                                                                                                <li><a href="master.php?o=medicine-view"><i class="fa fa-list "></i>Medicine List</a></li>
                                                                                                                <li><a href="master.php?o=sale-medicine"><i class="fa fa-money "></i> Medicine Invoice Entry </a></li>
                                                                                                                <li><a href="master.php?o=sale-medicine-report"><i class="fa fa-binoculars "></i>Medicine Invoice  view </a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-wheelchair"></i>Hospital Management <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?u=appointment-view"><i class="fa fa-list-ul "></i> Appointment List </a></li>
                                                                                                                <li><a href="master.php?o=bed-view"><i class="fa fa-list-alt  "></i>Bed List</a></li>
                                                                                                                <li><a href="master.php?o=admission-new"><i class="fa fa-bicycle "></i> Admission Form</a></li>
                                                                                                                <li><a href="master.php?o=admission-view"><i class="fa fa-wheelchair "></i> Admitted Patient List</a></li>
                                                                                                                <li><a href="master.php?o=admission-release"><i class="fa fa-bicycle "></i> Patient Release Form</a></li>
                                                                                                                <li><a href="master.php?o=admission-release-view"><i class="fa fa-list "></i>Patient Release List</a></li>
                                                                                                                <li><a href="master.php?o=department-view"><i class="fa fa-list "></i>Department List </a></li>
                                                                                                                <li><a href="master.php?o=prescription-new"><i class="fa fa-bicycle "></i>Prescription Form</a></li>
                                                                                                                <li><a href="master.php?o=prescription-report"><i class="fa fa-binoculars "></i>Prescription view</a></li>
                                                                                                                <li><a href="master.php?o=specialty-view"><i class="fa fa-list "></i>specialty List </a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li> <a href="#"><i class="fa fa-users "></i>Human Resource Management <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=doctor-view"><i class="fa fa-user-md "></i>Doctor-List</a></li>
                                                                                                                <li><a href="master.php?o=doctor-new"><i class="fa fa-bicycle "></i>Doctor Entry</a></li>
                                                                                                                <li><a href="master.php?o=staff-new"><i class="fa fa-bicycle "></i>Staff Entry </a></li>
                                                                                                                <li><a href="master.php?o=staff-view"><i class="fa fa-list-alt "></i>Staff List </a></li>
                                                                                                                <li><a href="master.php?o=staff-view"><i class="fa fa-check-square "></i>Staff Attendance </a></li>
                                                                                                                <li><a  href="master.php?o=salary"><i class="fa fa-bicycle "></i>Salary Sheet Entry</a></li>
                                                                                                                <li><a href="master.php?u=register-view"><i class="fa fa-flash "></i> Registered staff's view</a></li>
                                                                                                                <li><a href="master.php?o=register-backend"><i class="fa fa-flash "></i>Staff's Registration Form</a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-coffee"></i>Canteen Management <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=canteen-invoice"><i class="fa fa-apple "></i>Canteen  Invoice </a></li>
                                                                                                                <li><a href="master.php?o=canteen-invoice-report"><i class="fa fa-apple "></i>Invoice List</a></li>
                                                                                                                <li><a href="master.php?o=canteen"><i class="fa fa-apple "></i>Canteen  Food Entry </a></li>
                                                                                                                <li><a href="master.php?o=canteen-view"><i class="fa fa-list "></i>Food Price List </a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-tint btn btn-sm btn-default" style="color: red"></i>Blood Bank<span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=bloodbank-new"><i class="fa fa-tint " style="color: red"></i>Blood Bank Form </a></li>
                                                                                                                <li><a href="master.php?o=bloodbank-view"><i class="fa fa-list"></i>Blood Collection List </a></li>
                                                                                                                <li><a href="master.php?o=blood_bank_receiver_view"><i class="fa fa-list"></i>Blood Receiver List </a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-cog fa-fw "></i>Settings<span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?o=bed-new"><i class="fa fa-bed  "></i>Bed Entry</a></li>
                                                                                                                <li><a href="master.php?o=visitday-new"><i class="fa fa-flash "></i>Create Visit day </a></li>
                                                                                                                <li><a href="master.php?o=specialty-new"><i class="fa fa-bicycle "></i>specialty Entry</a></li>
                                                                                                                <li><a href="master.php?o=department-new"><i class="fa fa-flash "></i>Department Entry </a></li>
                                                                                                                <li><a href="master.php?o=designation-new"><i class="fa fa-flash "></i>Designation Entry</a></li>
                                                                                                                <li><a href="master.php?o=designation-view"><i class="fa fa-flash "></i>Designation List </a></li>
                                                                                                                <li><a href="master.php?o=generic-new"><i class="fa fa-medkit "></i>Generic Entry</a></li>
                                                                                                                <li><a href="master.php?o=room-new"><i class="fa fa-flash "></i>Room Entry </a></li>
                                                                                                                <li><a href="master.php?o=room-view"><i class="fa fa-flash "></i>Room List </a></li>
                                                                                                                <li><a href="master.php?o=visitday-new"><i class="fa fa-flash "></i>Visit day new </a></li>
                                                                                                                <li><a href="master.php?o=visitday-view"><i class="fa fa-flash "></i>Visit day List </a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#"><i class="fa fa-paw "></i>Personalization <span class="fa arrow"></span></a>
                                                                                                            <ul class="nav nav-second-level">
                                                                                                                <li><a href="master.php?u=change-password"><i class="fa fa-edit"></i> Change password </a></li>
                                                                                                                <li><a href="master.php?u=feedback-view"><i class="fa fa-question"></i> Feedback</a></li>
                                                                                                                <li><a href = "master.php?o=notice-new"><i class = "fa fa-info-circle"></i> Notice Create</a></li>
                                                                                                                <li><a href = "master.php?o=notice-view"><i class = "fa fa-info-circle"></i> Notice View</a></li>
                                                                                                                <li><a href="master.php"><i class="fa fa-user-md "></i> Profile</a></li>
                                                                                                                <li><a href="#"> <i class="fa fa-envelope "></i> Send Message</a></li><hr>
                                                                                                                    <li><a onclick="Logout()" href="logout.php" ><i class="fa fa-sign-out btn btn-danger"></i> Logout</a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </nav>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <!-- ************************ Side Nave End ************************-->

                                                                            <!-- ************************ Page Load Start ************************-->
                                                                            <section>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <!-- /. Body  -->   <?php
                                                                                        if (isset($_GET['a']) && $_SESSION['mytype'] == 'a') {
                                                                                            if (file_exists("admin/" . $_GET['a'] . "-idb.php")) {
                                                                                                require_once "admin/" . $_GET['a'] . "-idb.php";
                                                                                            } else {
                                                                                                require_once "view/404-idb.php";
                                                                                            }
                                                                                        } else if (isset($_GET['o']) && ($_SESSION['mytype'] == 'o' || $_SESSION['mytype'] == 'a')) {
                                                                                            if (file_exists("operator/" . $_GET['o'] . "-idb.php")) {
                                                                                                require_once "operator/" . $_GET['o'] . "-idb.php";
                                                                                            } else {
                                                                                                require_once "view/404-idb.php";
                                                                                            }
                                                                                        } else if (isset($_GET['u']) && ($_SESSION['mytype'] == 'u' || $_SESSION['mytype'] == 'o' || $_SESSION['mytype'] == 'a')) {
                                                                                            if (file_exists("user/" . $_GET['u'] . "-idb.php")) {
                                                                                                require_once "user/" . $_GET['u'] . "-idb.php";
                                                                                            } else {
                                                                                                require_once "view/404-idb.php";
                                                                                            }
                                                                                        } else {
                                                                                            require_once "user/home-idb.php";
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>  
                                                                            </section>
                                                                            <!-- ************************ Page Load End ************************-->
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <!-- ************************ Body End ************************-->
                                                                <!-- ************************ Footer Start ************************-->
                                                                <section>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div id="footer-sec">
                                                                                &copy; <?Php echo date('Y');?> IDB Hospital | Design By : <a href="index.php" target="_blank">Wpsi Round 28 Limited. &reg;</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /. FOOTER  -->
                                                                        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                                                                        <!-- JQUERY SCRIPTS -->
                                                                        <script src="assets/js/jquery-1.10.2.js"></script>
                                                                        <!-- BOOTSTRAP SCRIPTS -->
                                                                        <script src="assets/js/bootstrap.js"></script>
                                                                        <!-- METISMENU SCRIPTS -->
                                                                        <script src="assets/js/jquery.metisMenu.js"></script>
                                                                        <!-- CUSTOM SCRIPTS -->
                                                                        <script src="assets/js/custom.js"></script>
                                                                    </div>
                                                                </section>
                                                                <!-- ************************ Footer End ************************-->
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </body>
                                                                </html>