<?php include('../common.php');?>

<!doctype html>
<html lang="en">

<head>
<title>:: Mplify :: Table Normal</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<?php include('../css.php');?>

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/color_skins.css">
<style>
    td.details-control {
    background: url('../assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('../assets/images/details_close.png') no-repeat center center;
    }

    .img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 91px;
    height: 70px;
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
<?php include('../sidebar.php');?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">          
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">User List</li>
                        </ul>
                    </div>
                </div>
            </div>     
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>User List</h2>    
                            <a href="<?php echo $base_url;?>user/add-user.php"><button type="button" class="btn btn-primary" style="float: right;"><i class="fa  fa-plus-square-o"></i> Add New User</button></a>                        
                        </div></br>
                        <div class="body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>#sl</th>
                                            <th>Image</th>
                                            <th style="width: 1000px !important;">Title</th>
                                            <th>Category</th>
                                            <th>Hits</th>
                                            <th>Post By</th>
                                            <th>Post Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>#sl</td>
                                            <td><div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../../assets/images/sm/avatar2.jpg" alt="Awesome Image"></div></td>
                                            <td style="width: 1000px !important;">Title</td>
                                            <td>Category</td>
                                            <td>Hits</td>
                                            <td>Post By</td>
                                            <td>Post Date</td>
                                            <td><button type="button" class="btn btn-primary" title="Publish">Publish</button></td>
                                            <td> 
                                            <button type="button" class="btn btn-primary" title="Edit"><span class="sr-only">Edit</span> <i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><span class="sr-only">View</span> <i class="fa fa-eye"></i></button>   
                                                <button type="button" class="btn btn-danger" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></button>
                                        
                                        </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#sl</th>
                                            <th>Image</th>
                                            <th style="width: 1000px !important;">Title</th>
                                            <th>Category</th>
                                            <th>Hits</th>
                                            <th>Post By</th>
                                            <th>Post Date</th>
                                            <th>Status</th>
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

<?php include('../js.php');?>
</body>
</html>
