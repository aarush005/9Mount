<?php
require('./connection/connection.php');
require('./connection/fuction.php');
$msg = '';
if (isset($_POST['submit'])) {
     $username = get_safe_value($con,$_POST['username']);
     $password = get_safe_value($con,$_POST['password']);

$sql = "SELECT * FROM `admin_users` Where username='$username' AND password = '$password'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count>0) {
    $_SESSION['ADMIN_LOGIN']='yes';
    $_SESSION['ADMIN_USERNAME']=$username;
    header('location:categories.php');
    die();
} else {
    $msg = "Please enter correct login details";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>9Mount Admin Panel</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->

    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<!-- [ auth-signin ] start -->

<body style="background: #222D32;">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 admin-login-box">
            <div class="col-lg-12 admin-login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 admin-login-title">
                ADMIN PANEL
            </div>

            <div class="col-lg-12 admin-login-form">
                <div class="col-lg-12 admin-login-form">
                    <form method="post">
                        <div class="form-group">
                            <label class="form-control-label">USERNAME</label>
                            <input type="username" class="form-control" name="username" placeholder="Username" Required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" Required>
                        </div>

                        <div class="col-lg-12 admin-loginbttm">
                            <div class="col-lg-6 admin-login-btn admin-login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 admin-login-btn admin-login-button">
                                <button type="submit" class="btn btn-outline-primary" name="submit">LOGIN</button>
                            </div>
                           
                        </div>
                        <div class="field_error-danger "><?php echo $msg?></div>


                    </form>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 admin-login-text" >
                    <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
                 
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-2"></div> -->
    </div>
    </div>



    <!-- </div> -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>

</html>