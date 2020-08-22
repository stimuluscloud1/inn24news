<?php
session_start();
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $digit1=$_POST['codeBox1'];
    $digit2=$_POST['codeBox2'];
    $digit3=$_POST['codeBox3'];
    $digit4=$_POST['codeBox4'];
    $digit5=$_POST['codeBox5'];
    $digit6=$_POST['codeBox6'];

    $otpCode=$digit1.$digit2.$digit3.$digit4.$digit5.$digit6;

    if($otpCode== $_SESSION['otp']){
        unset($_SESSION['otpVerify']);
        ?>
        <script>
        var id = '<?php echo $id; ?>';
        window.location="./reset-password.php?id="+id;</script>
        <?php
	}else{
		echo "<script>alert('Something went wrong, Please check OTP again.');</script>";
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
    <style>
        input[type=number] {
            height: 30px;
            width: 30px;
            font-size: 20px;
            text-align: center;
            /* border: 1px solid #000000; */
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <script>
        function getCodeBoxElement(index) {
            return document.getElementById('codeBox' + index);
        }

        function onKeyUpEvent(index, event) {
            const eventCode = event.which || event.keyCode;
            if (getCodeBoxElement(index).value.length === 1) {
                if (index !== 6) {
                    getCodeBoxElement(index + 1).focus();
                } else {
                    getCodeBoxElement(index).blur();
                    // Submit code
                    console.log('submit code ');
                }
            }
            if (eventCode === 8 && index !== 1) {
                getCodeBoxElement(index - 1).focus();
            }
        }

        function onFocusEvent(index) {
            for (item = 1; item < index; item++) {
                const currentElement = getCodeBoxElement(item);
                if (!currentElement.value) {
                    currentElement.focus();
                    break;
                }
            }
        }
    </script>
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="../index.php"><img src="../assets/images/logo-icon.svg" alt="Mplify"></a></div>
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
                                <li><a href="../index.php"><i class="fa fa-home"></i></a></li>
                                <li><a href="javascript:void(0);">Help</a></li>
                                <li><a href="javascript:void(0);">Contact</a></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="header">
                                <p class="lead">Enter One Time Password</p>
                            </div>
                            <div class="body">
                            <p>We have sent OTP to your email ID, Please check your email to confirm OTP.</p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input id="codeBox1" type="number" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)" name="codeBox1"/>
                                        <input id="codeBox2" type="number" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)" name="codeBox2"/>
                                        <input id="codeBox3" type="number" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)" name="codeBox3"/>
                                        <input id="codeBox4" type="number" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)" name="codeBox4"/>
                                        <input id="codeBox5" type="number" maxlength="1" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)" name="codeBox5"/>
                                        <input id="codeBox6" type="number" maxlength="1" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)" name="codeBox6"/>
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