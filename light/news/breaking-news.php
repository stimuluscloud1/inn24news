<!doctype html>
<html lang="en">

<head>
<title>:: Mplify :: Table Dragger</title>
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
<link rel="stylesheet" href="../../assets/vendor/table-dragger/table-dragger.min.css">

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

    <div id="mega_menubar" class="mega_menubar">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Subscribe</h2>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="Enter Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="Enter Email" class="form-control">
                                </div>
                                <button class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Accordion</h2>
                        </div>
                        <div class="body">
                            <ul class="accordion2">
                                <li class="accordion-item is-active">
                                    <h3 class="accordion-thumb"><span>Lorem ipsum</span></h3>
                                    <p class="accordion-panel">
                                        Lorem ipsum dolor sit amet, elit. Placeat, quibusdam! Voluptate nobis
                                    </p>
                                </li>
                                
                                <li class="accordion-item">
                                    <h3 class="accordion-thumb"><span>Dolor sit amet</span></h3>
                                    <p class="accordion-panel">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing  Voluptate nobis
                                    </p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Company</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled links">
                                <li><a href="javascript:void(0);" title="" >Our Facts</a></li>
                                <li><a href="javascript:void(0);" title="" >Confidentiality</a></li>                                
                                <li><a href="javascript:void(0);" title="" >About Us</a></li>
                                <li><a href="javascript:void(0);" title="" >Testimonials</a></li>
                                <li><a href="javascript:void(0);" title="" >Contact Us</a></li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Image Gallery</h2>
                        </div>
                        <div class="body">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="../assets/images/image-gallery/1.jpg" class="img-fluid" alt="img" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/images/image-gallery/2.jpg" class="img-fluid" alt="img" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/images/image-gallery/3.jpg" class="img-fluid" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins" aria-expanded="true">Mplify</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact" aria-expanded="false">Contact</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Timeline" aria-expanded="false">Timeline </a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane animated fadeIn in active" id="skins" aria-expanded="true">
                <div class="sidebar-scroll">
                    <div class="card">
                        <div class="header">
                            <h2>General Setting</h2>
                        </div>
                        <div class="body">
                            <ul class="setting-list list-unstyled">
                                <li>
                                    <label for="checkbox1" class="fancy-checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <span>Report Panel Usage</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="checkbox2" class="fancy-checkbox">
                                        <input id="checkbox2" type="checkbox" checked>
                                        <span>Email Redirect</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="checkbox3" class="fancy-checkbox">
                                        <input id="checkbox3" type="checkbox" checked>
                                        <span>Notifications</span>
                                    </label>         
                                </li>
                                <li>
                                    <label for="checkbox4" class="fancy-checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <span>Auto Updates</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="checkbox5" class="fancy-checkbox">
                                        <input id="checkbox5" type="checkbox">
                                        <span>Offline</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="checkbox6" class="fancy-checkbox">
                                        <input id="checkbox6" type="checkbox">
                                        <span>Location Permission</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Color Skins</h2>
                        </div>
                        <div class="body">
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                    <span>Purple</span>
                                </li>                   
                                <li data-theme="blue" class="active">
                                    <div class="blue"></div>
                                    <span>Blue</span>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                    <span>Cyan</span>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                    <span>Green</span>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                    <span>Orange</span>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                    <span>Blush</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Storage</h2>
                        </div>
                        <div class="body">
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                </div>
                            </div>
                            <small>50MB of 10GB Used</small>
                            <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane animated fadeIn" id="contact" aria-expanded="false">
                <div class="sidebar-scroll">
                    <div class="card">
                        <div class="header">
                            <h2>Recent Chat</h2>
                        </div>
                        <div class="body">
                            <ul class="right_chat list-unstyled">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Angular Champ</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Sales Lead</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">PHP Expert</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">eCommerce Master</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Contact List</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled contact-list">
                                <li class="d-flex align-items-center">
                                    <span class="contact-img">
                                        <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                    </span>
                                    <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="contact-img">
                                        <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                                    </span>
                                    <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="contact-img">
                                        <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                    </span>
                                    <h4 class="contact-name">Aiden Chavaz</h4>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="contact-img">
                                        <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                                    </span>
                                    <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="contact-img">
                                        <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                                    </span>
                                    <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="contact-img">
                                        <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                                    </span>
                                    <h4 class="contact-name">Aiden Chavaz</h4>
                                </li>                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane animated fadeIn" id="Timeline" aria-expanded="false">
                <div class="sidebar-scroll">
                    <div class="card">
                        <div class="header">
                            <h2>My Stats</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled basic-list">
                                <li><i class="icon-book-open m-r-5"></i> Active Projects <span class="badge badge-primary">21</span></li>
                                <li><i class="icon-list m-r-5"></i> Task Pending <span class="badge-purple badge">50</span></li>
                                <li><i class="fa fa-ticket m-r-5"></i> Support Tickets<span class="badge-success badge">9</span></li>
                                <li><i class="icon-tag m-r-5"></i> New Projects<span class="badge-info badge">7</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="new_timeline mt-3">
                                <div class="header">
                                    <div class="color-overlay">
                                        <div class="day-number">8</div>
                                        <div class="date-right">
                                        <div class="day-name">Monday</div>
                                        <div class="month">July 2018</div>
                                        </div>
                                    </div>                                
                                </div>
                                <ul>
                                    <li>
                                        <div class="bullet pink"></div>
                                        <div class="time">11am</div>
                                        <div class="desc">
                                            <h3>Attendance</h3>
                                            <h4>Computer Class</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">12pm</div>
                                        <div class="desc">
                                            <h3>Developer Team</h3>
                                            <h4>Hangouts</h4>
                                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet orange"></div>
                                        <div class="time">1:30pm</div>
                                        <div class="desc">
                                            <h3>Lunch Break</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">2pm</div>
                                        <div class="desc">
                                            <h3>Finish</h3>
                                            <h4>Go to Home</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Table Dragger</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Table Dragger</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Default <small>With no options, sort columns, handler was the first row</small></h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="default-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Movie Title<i class="table-dragger-handle"></i></th>
                                        <th>Genre<i class="table-dragger-handle"></i></th>
                                        <th>Year<i class="table-dragger-handle"></i></th>
                                        <th>Gross<i class="table-dragger-handle"></i></th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>Star Wars</td>
                                        <td>Adventure, Sci-fi</td>
                                        <td>1977</td>
                                        <td>$460,935,665</td>
                                    </tr>
                                    <tr>
                                        <td>Howard The Duck</td>
                                        <td>"Comedy"</td>
                                        <td>1986</td>
                                        <td>$16,295,774</td>
                                    </tr>
                                    <tr>
                                        <td>American Graffiti</td>
                                        <td>Comedy, Drama</td>
                                        <td>1973</td>
                                        <td>$115,000,000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Handler <small>Specify drag handler wherever within the table</small></h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="handle-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Movie Title <i class="table-dragger-handle handle">dragme</i></th>
                                        <th>Genre</th>
                                        <th>Year</th>
                                        <th>Gross</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>Star Wars</td>
                                        <td>Adventure, Sci-fi</td>
                                        <td>1977</td>
                                        <td>$460,935,665</td>
                                    </tr>
                                    <tr>
                                        <td>Howard The Duck</td>
                                        <td>"Comedy"</td>
                                        <td>1986</td>
                                        <td>$16,295,774</td>
                                    </tr>
                                    <tr>
                                        <td>American Graffiti</td>
                                        <td>Comedy, Drama</td>
                                        <td>1973</td>
                                        <td>$115,000,000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Sort Rows <small>Sort rows, handler was the first column</small></h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="row-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Movie Title<i class="table-dragger-handle"></i></th>
                                        <th>Genre</th>
                                        <th>Year</th>
                                        <th>Gross</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>Star Wars<i class="table-dragger-handle"></i></td>
                                        <td>Adventure, Sci-fi</td>
                                        <td>1977</td>
                                        <td>$460,935,665</td>
                                    </tr>
                                    <tr>
                                        <td>Howard The Duck<i class="table-dragger-handle"></i></td>
                                        <td>"Comedy"</td>
                                        <td>1986</td>
                                        <td>$16,295,774</td>
                                    </tr>
                                    <tr>
                                        <td>American Graffiti<i class="table-dragger-handle"></i></td>
                                        <td>Comedy, Drama</td>
                                        <td>1973</td>
                                        <td>$115,000,000</td>
                                    </tr>
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

<script src="../../assets/vendor/table-dragger/table-dragger.min.js"></script>

<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/bundles/morrisscripts.bundle.js"></script>

<script>
    // Default
    tableDragger(document.querySelector("#default-table"));

    // Handler
    tableDragger(document.querySelector("#handle-table"), { dragHandler: ".handle" });

    // Sort Rows
    tableDragger(document.querySelector("#row-table"), { mode: "row" });

    // Free
    tableDragger(document.querySelector("#free-table"), { mode: "row", onlyBody: true, dragHandler: ".handle" });

    // Only Body
    tableDragger(document.querySelector("#only-bodytable"), { mode: "row", onlyBody: true });
</script>
</body>
</html>
