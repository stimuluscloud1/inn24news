<!doctype html>
<html lang="en">

<head>
<title>:: Mplify :: Blog Post</title>
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
<link rel="stylesheet" href="../../assets/vendor/summernote/dist/summernote.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/color_skins.css">


<link rel="stylesheet" href="../../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/vendor/sweetalert/sweetalert.css"/>


</head>
<style>
    td.details-control {
    background: url('../assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('../assets/images/details_close.png') no-repeat center center;
    }
</style>

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
                        <h2>Post Category</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="<?php echo $base_url;?>index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Category</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="body">
                            <form>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="category" placeholder="Enter Category Name" />
                            </div>
                            <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="card">
                        <div class="header">
                        <label>Category List</label>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>                                            
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                         <tr>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>


<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/bundles/morrisscripts.bundle.js"></script>
<script src="../../assets/vendor/summernote/dist/summernote.js"></script>


<script src="../assets/bundles/datatablescripts.bundle.js"></script>
<script src="../../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="../../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<script src="../assets/js/pages/tables/jquery-datatable.js"></script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
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
