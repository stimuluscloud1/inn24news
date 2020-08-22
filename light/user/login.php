<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
include('admin.php');
$userData = new Admin();

if (isset($_POST['submit'])) {
    //print_r($_POST);
    $data = $userData->userLogin($_POST);

    if ($data == true) {
        $msg = "Logged In Successfully!";
    } else {
        $msg = "LogIn Failed!";
    }

    // if ($_POST["remember"] == true) {
    //     $hour = time() + 3600 * 24 * 30;

    //     $email=$_POST['email'];
    //     $password=$_POST['password'];
    //     setcookie('username', $email, $hour);
    //     setcookie('password', $password, $hour);

    // }

    // if(count($_COOKIE) > 0) {
    //     $userPassword= $_COOKIE['password'];
    //     $userName=$_COOKIE['username'];
    //  }else{
    //     $userPassword= "";
    //     $userName="";
    //  }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>:: Mplify :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php include('../css.php'); ?>
</head>

<body class="theme-blue">
    <!-- WRAPPER -->

    <div id="wrapper">

        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="index.html"><img src="../../assets/images/logo-icon.svg" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <a href="index.html">
                                <img src="../../assets/images/logo-icon.svg" alt="Mplify">
                                <span>Mplify</span>
                            </a>
                        </div>
                        <div class="left-slider">
                            <img src="../../assets/images/login/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="auth-right">
                        <div class="right-top">
                            <ul class="list-unstyled clearfix d-flex">
                                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li><a href="javascript:void(0);">Help</a></li>
                                <li><a href="javascript:void(0);">Contact</a></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="header">
                                <p class="lead">Log in</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="" method="POST">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php //echo $userName;
                                                                                                        ?>" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" name="password" value="<?php //echo $userPassword;
                                                                                                            ?>" placeholder="Password" required>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="fancy-checkbox element-left">
                                            <input type="checkbox" name="remember">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                    <div class="bottom">
                                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="email-verify.php">Forgot password?</a></span>
                                    </div>
                                </form>
                                <p><?php
                                    if (isset($msg)) {
                                        echo "<div class='alert alert-success' role='alert'>$msg</div>";
                                        if ($data == true) {
                                            echo '<script>
                                setInterval(window.location="../index.php", 10000);
                                                           </script>';
                                        }
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>