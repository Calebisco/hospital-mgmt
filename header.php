<!-- ************************ Top Nav Start ************************-->
<section>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="user-img-div" style="float: left;">
                    <a class="navbar-brand" href="index.php"><img src="assets-front/images/logo.png" alt="logo" width="200"/> IDB Hospital</a>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
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
                                <small>Login as :  <?php echo $_SESSION['myname']; ?> </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #fff; text-decoration: none;"><span class="fa fa-angle-down fa-2x btn btn-sm btn-success"></span></a>
                            <ul class="dropdown-menu alert-success" role="menu"><hr>
                                <li><a href="master.php">Profile</a></li>
                                <li><a onclick="Logout()" href="logout.php" >Logout</a></li>
                                <li><a href="master.php?u=change-password"> Change Password</a></li>
                                <li><a href="#"> Settings</a></li>
                                <li><a href="#"> Send Message</a></li><hr>
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
                                    if ($_SESSION['mytype'] == 'a') {
                                        ?>
                                        <li>
                                            <a class="active-menu" href="master.php"><i class="fa fa-dashboard "></i>Profile</a>
                                        </li>
                                        <li>
                                            <a class="active-menu" href="master.php?o=salary"><i class="fa fa-dashboard "></i>Salary</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Admission of patient <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=admission-new"><i class="fa fa-flash "></i>New Admission</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=admission-view"><i class="fa fa-flash "></i>Admitted</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=admission-release"><i class="fa fa-flash "></i>Patient Release</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=admission-release-view"><i class="fa fa-flash "></i>Release List</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Ambulance <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=ambulance-new"><i class="fa fa-flash "></i>Ambulance New </a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=ambulance-view"><i class="fa fa-flash "></i>Ambulance view </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="master.php?u=appointment-view"><i class="fa fa-flash "></i>Appointment view </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bed "></i>Bed Management<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="master.php?o=bed-new"><i class="fa fa-plus "></i>Bed New</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=bed-view"><i class="fa fa-comments-o "></i>Bed View</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="master.php?u=change-password"><i class="fa fa-flash "></i>Change password </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bed "></i>Cash<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="master.php?o=cash"><i class="fa fa-plus "></i>Cash report</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Department <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=department-new"><i class="fa fa-flash "></i>Department New </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=department-view"><i class="fa fa-flash "></i>Department view </a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Designation <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=designation-new"><i class="fa fa-flash "></i>New Designation</a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=designation-view"><i class="fa fa-flash "></i>Designation view </a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Diagnosis Test<span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=diagnosis-test-new"><i class="fa fa-flash "></i>New Diagnosis test</a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=diagnosis-test-view"><i class="fa fa-flash "></i>Diagnosis test view </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=diagnosis-test-invoice"><i class="fa fa-flash "></i>Diagnosis Invoice</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Doctor Information <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=doctor-new"><i class="fa fa-flash "></i>Doctor-New</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=doctor-view"><i class="fa fa-flash "></i>Doctor-View</a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Expense<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=expense-new"><i class="fa fa-flash "></i>New Expense </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=expense-view"><i class="fa fa-flash "></i>View Expense </a>

                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Feedback Information <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?u=feedback-view"><i class="fa fa-flash "></i>Feedback-View</a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Generic <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=generic-new"><i class="fa fa-flash "></i>Generic-new</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=generic-view"><i class="fa fa-flash "></i>Generic-veiw </a>

                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Medicine <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=medicine-new"><i class="fa fa-flash "></i>Medicine-new</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=medicine-view"><i class="fa fa-flash "></i>Medicine-veiw </a>

                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Notice <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=notice-new"><i class="fa fa-flash "></i>New Notice</a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=notice-view"><i class="fa fa-flash "></i>Notice view </a>

                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Prescription <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=prescription-new"><i class="fa fa-flash "></i>New Prescription</a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=notice-view"><i class="fa fa-flash "></i>Prescription view </a>

                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="master.php?u=register-view"><i class="fa fa-flash "></i>Registration view </a>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Room <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=room-new"><i class="fa fa-flash "></i>Room New </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=room-view"><i class="fa fa-flash "></i>Room View </a>

                                                </li>

                                            </ul>
                                        </li> 
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Report <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?a=report"><i class="fa fa-flash "></i>Report </a>

                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Speciality <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=specialty-new"><i class="fa fa-flash "></i>specialty-new</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=specialty-view"><i class="fa fa-flash "></i>specialty-veiw </a>

                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Staff <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=staff-new"><i class="fa fa-flash "></i>Staff New </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=staff-view"><i class="fa fa-flash "></i>Staff view </a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>sales Medicine <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=sale-medicine"><i class="fa fa-flash "></i>sales Medicine New </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=sale-medicine-view"><i class="fa fa-flash "></i>sales Medicine view </a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Trip <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=trip-new"><i class="fa fa-flash "></i>Trip-new</a>
                                                </li>
                                                <li>
                                                    <a href="master.php?o=trip-view"><i class="fa fa-flash "></i>Trip-veiw </a>

                                                </li>
                                            </ul>

                                        </li>
                                        <li>

                                            <a href="#"><i class="fa fa-desktop "></i>Visitday <span class="fa arrow"></span></a>

                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=visitday-new"><i class="fa fa-flash "></i>Visitday New </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=visitday-view"><i class="fa fa-flash "></i>Visitday view </a>

                                                </li>
                                            </ul>
                                        </li>

                                        <?php
                                    }
                                    if ($_SESSION['mytype'] == 'o' && 'a') {
                                        ?>
                                        <li>
                                            <a href = "master.php?u=change-password"><i class = "fa fa-flash "></i>Change password </a>

                                        </li>
                                        <li>
                                            <a href = "master.php?o=notice-new"><i class = "fa fa-flash "></i>New Notice</a>

                                        </li>
                                        <li>
                                            <a href = "master.php?o=department-new"><i class = "fa fa-flash "></i>Department New </a>

                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-desktop "></i>Expense<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="master.php?o=expense-new"><i class="fa fa-flash "></i>New Expense </a>

                                                </li>
                                                <li>
                                                    <a href="master.php?o=expense-view"><i class="fa fa-flash "></i>View Expense </a>

                                                </li>

                                            </ul>
                                        </li>

                                        <?php
                                    }
                                    if ($_SESSION['mytype'] == 'u' && 'o' && 'a') {
                                        ?>
                                        <li>
                                            <a href="master.php?u=change-password"><i class="fa fa-flash "></i>Change password </a>
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