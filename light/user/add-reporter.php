<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('./admin.php');

$reporter = new Admin();
if (isset($_POST['submit'])) {
    $reporterData = $reporter->addReporter($_POST);
}

?> 

<!doctype html>
<html lang="en">

<head>
    <title>:: Mplify :: Form Validation</title>
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
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="../../assets/vendor/parsleyjs/css/parsley.css">
    <link rel="stylesheet" href="../../assets/vendor/summernote/dist/summernote.css" />


    <link rel="stylesheet" href="../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/multi-select/css/multi-select.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../../assets/vendor/nouislider/nouislider.min.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/color_skins.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

    <style>
        .col-lg-2 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 24%;
            display: inline-block;
        }

        .col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 24%;
            display: inline-block;
        }

        .col-lg-4 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 24%;
            display: inline-block;
        }

        .col-lg-6 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 49%;
            display: inline-block;
        }
    </style>
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- Overlay For Sidebars -->
    <div class="overlay" style="display: none;"></div>

    <div id="wrapper">
        <?php include('../sidebar.php'); ?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="../index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Add Reporter</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="card">
                        <div class="header">
                            <h2>Add Reporter</h2>
                            <a href="<?php echo $base_url; ?>user/reporter.php"><button type="button" class="btn btn-primary" style="float: right;"><i class="fa  fa-plus-square-o"></i> Reporter List</button></a>
                        </div>
                        <div class="body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="text" class="form-control" name="fullName" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="text" class="form-control" name="fatherName" required>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="number" class="form-control" name="mobile" required>
                                    </div>
                                </div> -->
                                <div class="col-lg-4">
                                        <b>Mobile Number</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control mobile-phone-number" name="mobile" placeholder="Ex: (000) 000-00-00" name="mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Aadhar Number</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="number" class="form-control" name="aadharNumber" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <label>Gender</label>
                                    <span class="font-weight-800 text-danger">*</span>
                                    <div class="form-group">
                                        <select name="gender" class="form-control" required>
                                            <option selected>Select</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-3 col-md-12">
                                    <label>DOB</label>
                                    <span class="font-weight-800 text-danger">*</span>
                                    <div class="input-group mb-3">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy" name="dob" required>
                                    </div>
                                </div> -->
                                <div class="col-lg-3 col-md-6">
                                        <b>DOB</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </div>
                                            <input type="text" placeholder="Ex: 30/07/2016" data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy" name="dob" required>
                                        </div>
                                    </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Address Line-I</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="text" class="form-control" name="address1" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Address Line-II</label>
                                        <input type="text" class="form-control" name="address2">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <label>City</label>
                                    <span class="font-weight-800 text-danger">*</span>
                                    <div class="form-group">
                                        <select name="city" class="form-control" required>
                                            <option selected>Select</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Editor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <label>State</label>
                                    <span class="font-weight-800 text-danger">*</span>
                                    <div class="form-group">
                                        <select name="state" class="form-control" required>
                                            <option selected>Select</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Editor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <label>Country</label>
                                    <span class="font-weight-800 text-danger">*</span>
                                    <div class="form-group">
                                        <select name="country" class="form-control" required>
                                            <option selected>Select</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Editor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Pin Code</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="text" class="form-control" name="pinCode" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <span class="font-weight-800 text-danger">*</span>
                                        <input type="file" name="fileToUpload">
                                    </div>
                                </div>
                                <hr>
                                <div class="header">
                                    <h3 style="font-size: 1.20rem;">Social Profile</h3>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <i class="fa fa-facebook"></i>
                                        <label>Facebook</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://www.facebook.com/</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="facebook">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <i class="fa fa-instagram"></i>
                                        <label>Instagram</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://www.instagram.com/</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="instagram">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <i class="fa fa-twitter"></i>
                                        <label>Twitter</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://twitter.com/</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="twitter">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <i class="fa fa-linkedin"></i>
                                        <label>LinkedIn</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://www.linkedin.com/</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="linkedin">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" name="submit">Add Reporter</button>
                                    </div>
                                </div>
                            </form>
                            <p><?php
                                if (isset($_POST['submit'])) {
                                    echo $reporterData;
                                }
                                ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../../assets/vendor/parsleyjs/js/parsley.min.js"></script>

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../assets/bundles/morrisscripts.bundle.js"></script>
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
    <!-- Javascript -->

    <script src="../../assets/vendor/summernote/dist/summernote.js"></script>
    <!-- Javascript -->

    <script src="../../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js -->
    <script src="../../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js -->
    <script src="../../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="../../assets/vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
    <script src="../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../../assets/vendor/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../assets/bundles/morrisscripts.bundle.js"></script>
    <script src="../assets/js/pages/forms/advanced-form-elements.js"></script>

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
                popover: {
                    image: [],
                    link: [],
                    air: []
                }
            });

            $('.inline-editor').summernote({
                airMode: true
            });

        });

        window.edit = function() {
                $(".click2edit").summernote()
            },

            window.save = function() {
                $(".click2edit").summernote('destroy');
            }
    </script>
</body>

</html>