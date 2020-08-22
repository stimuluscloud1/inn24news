<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('admin.php');
$userData = new Admin();
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $password=$_POST['password'];
    $password1=$_POST['repassword'];
    if($password==$password1){
        $data = $userData->updatePassword($_POST, $id);
        if($data==true){
            echo "<script>window.location.href = 'password-updated.php';</script>";
        }
    }else{
        echo "no";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
<title>:: Mplify :: Lockscreen</title>
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
                    <div class="mobile-logo"><a href="../index.php"><img src="../../assets/images/logo-icon.svg" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <a href="../index.php">
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
                                <li><a href="../index.php"><i class="fa fa-home"></i></a></li>
                                <li><a href="javascript:void(0);">Help</a></li>
                                <li><a href="javascript:void(0);">Contact</a></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="header">
                                <p class="lead">Reset Password</p>
                            </div>
                            <div class="body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Enter your password">                                    
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="repassword" class="form-control" placeholder="Re-Enter your password">                                    
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>                                
                                </form>
</br></br>
                                <div class="margin-top-30">
                                    <a href="login.php" class="btn btn-default"><i class="fa fa-arrow-left"></i> <span>Go Back to login</span></a>
                                    <a href="../index.php" class="btn btn-primary"><i class="fa fa-home"></i> <span>Home</span></a>
                                </div>
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
