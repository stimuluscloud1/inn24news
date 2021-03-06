<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include('admin.php');
$data = new Admin();
if(isset($_POST['submit'])){
    $newsData=$data->addNews($_POST);
    if($newsData==true){
        $msg="Posted Successfully";
    }else{
        $msg="Check Error";
    }    
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

    <style>
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
            max-width: 24%;
            display: inline-block;
        }

    
    </style>
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
        <?php include('../sidebar.php'); ?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Create Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="card">
                        <div class="header">
                            <h2>Create Post</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" method="post" action="">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>Select Category</label>
                                    <div class="form-group">
                                        <select name="category" class="form-control">
                                            <option selected>Select</option>    
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                            <option value="pepperoni">Pepperoni</option>
                                            <option value="onions">Onions</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>Select Reporter</label>
                                    <div class="form-group">
                                        <select name="reporter" class="form-control">
                                            <option selected>Select</option>    
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                            <option value="pepperoni">Pepperoni</option>
                                            <option value="onions">Onions</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label><a href="" onclick="if (!window.__cfRLUnblockHandlers) return false; window.open('https://news365v3.bdtask.com/Demo1_v5/admin/news_post/my_window/', '_blank', 'width=1000,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=100,screeny=10'); return false;">Image Library</a></label>
                                        <input type="text" readonly name="gallery" class="form-control">
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-12">
                                    <label>Release Date (dd/mm/yyyy)</label>
                                    <div class="input-group mb-3">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy" name="postdate">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Headline</label>
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <label>Details</label>
                                    <div class="summernote" name="description">
                                        <p></p>
                                    </div>
                                </div></br>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" name="metaTitle" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea rows="3" cols="165" name="metaDescription" style="display: grid !important;"></textarea>
                                    </div>
                                </div>
                                <!-- Tags Input -->
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="header">
                                            <label>Meta Keywords</label>
                                        </div>
                                        <div class="body">
                                            <div class="input-group demo-tagsinput-area">
                                                <input type="text" class="form-control" data-role="tagsinput" value="" name="metaKeywords">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">

                                        <br />
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="checkbox1" required data-parsley-errors-container="#error-checkbox">
                                            <span>Breaking News</span>
                                        </label>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox" name="checkbox2" required data-parsley-errors-container="#error-checkbox">
                                            <span>Latest News</span>
                                        </label>
                                        <p id="error-checkbox"></p>
                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" name="submit">Publish</button>
                                        <button type="submit" class="btn btn-primary">Save as Draft</button>
                                    </div>
                                </div>
                            </form>
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