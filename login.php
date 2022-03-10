<?php
session_start();

//if (isset($_SESSION['myid'])) {
//header("Location: master.php");
//}
require_once 'dal/DB.php';
require_once 'dal/dalUsers.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>IDB Hospital | Login</title>
         <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets-front/images/favicon.ico"/>

        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    <body style="background-color: #E2E2E2;">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 modal-content">
                    <div class="row text-center " style="padding-top:60px;">
                        <a href="index.php"><img src="assets-front/images/logo.png" alt="logo" width="150px"></a>
                        <h3>IDB Hospital</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        if (isset($_POST['sub'])) {
                            $u = new dalUsers();
                            $u->Email = $_POST['email'];
                            $u->Password = $_POST['pass'];
                            $data = $u->check();

                            if ($data) {

                                $_SESSION['myid'] = $data['id'];
                                $_SESSION["myname"] = $data["name"];
                                $_SESSION['mytype'] = $data['type'];
                                $_SESSION["mypic"] = $data["picture"];
                                header("Location: master.php");
                            } else {
                                echo "Invaliade Email or Password";
                            }
                        }
                        ?>
                        <form role="form" action="" method="post">
                            <hr />
                            <p class="fa fa-user" style="font-size: 20px; color: #2BAB02"> Enter Details to Login</p>
                            <br /><br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i style="color: #2BAB02" class="fa fa-tag"  ></i></span>
                                <input name="email" type="text" class="form-control" placeholder="Your Username " />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i style="color: #2BAB02" class="fa fa-lock"  ></i></span>
                                <input name="pass" type="password" class="form-control"  placeholder="Your Password" />
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Remember me
                                </label>
                                <span class="pull-right"><a href="index.php" >Forget password ? </a> </span>
                            </div>
                            <input type="submit" name="sub" value="Login now" class="btn btn-success btn-block"/><br>
                            Not register ? <a href="index.php?u=register" >click here </a> or go to <a href="index.php">Home</a> 
                        </form>
                    </div>

                </div>


            </div>
        </div>

    </body>
</html>


