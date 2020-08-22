<!doctype html>
<html lang="en">

<head>
    <title>:: Mplify :: Ui Cards</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/color_skins.css">

</head>

<body class="theme-blue">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay" style="display: none;"></div>

    <div id="wrapper">

    <?php include('../sidebar.php');?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2>Select Theme</h2>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="../index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Theme</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="../../assets/images/image-gallery/12.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="../../assets/images/image-gallery/13.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="../../assets/images/image-gallery/15.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="../../assets/images/image-gallery/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Activate</a>
                            </div>
                        </div>
                    </div>                    
                </div>
        </div>
    </div>

<?php include('../js.php');?>
</body>

</html>