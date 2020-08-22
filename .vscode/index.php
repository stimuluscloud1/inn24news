<!doctype html>
<html lang="en">

<head>
    <title>:: Mplify :: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
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

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-brand">
                    <a href="index.html">
                        <img src="../assets/images/logo-icon.svg" alt="Mplify Logo" class="img-responsive logo">
                        <span class="name">mplify</span>
                    </a>
                </div>

                <div class="navbar-right">
                    <ul class="list-unstyled clearfix mb-0">
                        <li>
                            <div class="navbar-btn btn-toggle-show">
                                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                            </div>
                            <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <form id="navbar-search" class="navbar-form search-form">
                                <input value="" class="form-control" placeholder="Search here..." type="text">
                                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                            </form>
                        </li>
                        <li>
                            <div id="navbar-menu">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="javascript:void(0);" class="mega_menu icon-menu" title="Mega Menu">Mega</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="create_new icon-menu" title="Create New">Create New</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                            <i class="icon-bell"></i>
                                            <span class="notification-dot"></span>
                                        </a>
                                        <ul class="dropdown-menu animated bounceIn notifications">
                                            <li class="header"><strong>You have 4 new Notifications</strong></li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-info text-warning"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                            <span class="timestamp">10:00 AM Today</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-like text-success"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                            <span class="timestamp">11:30 AM Today</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-pie-chart text-info"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                            <span class="timestamp">04:00 PM Today</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <i class="icon-info text-danger"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text">Error on website analytics configurations</p>
                                                            <span class="timestamp">Yesterday</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-flag"></i><span class="notification-dot"></span></a>
                                        <ul class="dropdown-menu animated bounceIn task">
                                            <li class="header"><strong>Project</strong></li>
                                            <li class="body">
                                                <ul class="menu tasks list-unstyled">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="text-muted">Clockwork Orange <span class="float-right">29%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="text-muted">Blazing Saddles <span class="float-right">78%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="text-muted">Project Archimedes <span class="float-right">45%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="text-muted">Eisenhower X <span class="float-right">68%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span class="text-muted">Oreo Admin Templates <span class="float-right">21%</span></span>
                                                            <div class="progress">
                                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%;"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="footer"><a href="javascript:void(0);">View All</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                        <ul class="dropdown-menu animated flipInX choose_language">
                                            <li><a href="javascript:void(0);">English</a></li>
                                            <li><a href="javascript:void(0);">French</a></li>
                                            <li><a href="javascript:void(0);">Spanish</a></li>
                                            <li><a href="javascript:void(0);">Portuguese</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                            <img class="rounded-circle" src="../assets/images/user-small.png" width="30" alt="">
                                        </a>
                                        <div class="dropdown-menu animated flipInY user-profile">
                                            <div class="d-flex p-3 align-items-center">
                                                <div class="drop-left m-r-10">
                                                    <img src="../assets/images/user-small.png" class="rounded" width="50" alt="">
                                                </div>
                                                <div class="drop-right">
                                                    <h4>Samuel Morriss</h4>
                                                    <p class="user-name">samuelmorris@info.com</p>
                                                </div>
                                            </div>
                                            <div class="m-t-10 p-3 drop-list">
                                                <ul class="list-unstyled">
                                                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                                                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="icon-menu js-right-sidebar"><i class="icon-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="leftsidebar" class="sidebar">
            <div class="sidebar-scroll">
                <nav id="leftsidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        </br>
                        <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li class="heading">News</li>
                        <li class="middle">
                            <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>News</span></a>
                            <ul>
                                <li><a href="ui-card.html">Add Post</a></li>
                                <li><a href="ui-typography.html">News List</a></li>
                                <li><a href="ui-tabs.html">Breaking News</a></li>
                                <li><a href="ui-buttons.html">Positioning</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Media Gallery</span></a>
                            <ul>
                                <li><a href="forms-validation.html">Add Picture</a></li>
                                <li><a href="forms-advanced.html">Add Video</a></li>
                                <li><a href="forms-basic.html">Image Gallery</a></li>
                                <li><a href="forms-wizard.html">Video Gallery</a></li>
                            </ul>
                        </li>
                        <li class="heading">SEO & Analytics</li>
                        <li>
                            <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Google</span></a>
                            <ul>
                                <li><a href="table-basic.html">Google Settings</a></li>
                                <li><a href="table-normal.html">Analytics</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>SEO</span></a>
                            <ul>
                                <li><a href="table-basic.html">SEO Setting</a></li>
                                <li><a href="table-normal.html">Social Site</a></li>
                            </ul>
                        </li>
                        <li class="heading">User</li>
                        <li>
                            <a href="#FileManager" class="has-arrow"><i class="icon-folder"></i><span>User Management</span></a>
                            <ul>
                                <li><a href="file-dashboard.html">Add Reporter</a></li>
                                <li><a href="file-documents.html">Add User</a></li>
                                <li><a href="file-media.html">User List</a></li>
                                <li><a href="file-images.html">Reporter List</a></li>
                            </ul>
                        </li>
                        <li class="heading">Advertisement Setting</li>
                        <li>
                            <a href="#FileManager" class="has-arrow"><i class="icon-folder"></i><span>Advertisement</span></a>
                            <ul>
                                <li><a href="file-dashboard.html">New Advertisement</a></li>
                                <li><a href="file-documents.html">Update Advertisement</a></li>
                            </ul>
                        </li>

                        <li class="heading">Extra</li>
                        <li class="top">
                            <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Category</span></a>
                            <ul>
                                <li><a href="page-login.html">Add Category</a></li>
                                <li><a href="page-register.html">Category List</a></li>
                            </ul>
                        </li>
                        <li class="top">
                            <a href="#Pages"><i class="icon-docs"></i><span>Theme Activation</span></a>
                        </li>
                        <li class="top">
                            <a href="#Pages"><i class="icon-docs"></i><span>Cache System</span></a>
                        </li>
                        <li class="top">
                            <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Settings</span></a>
                            <ul>
                                <li><a href="map-google.html">App Setting</a></li>
                                <li><a href="map-google.html">Add Page</a></li>
                                <li><a href="map-yandex.html">Home Page</a></li>
                                <li><a href="map-jvectormap.html">Menu</a></li>
                                <li><a href="map-jvectormap.html">Contact Page</a></li>
                                <li><a href="map-jvectormap.html">Email Setting</a></li>
                                <li><a href="map-jvectormap.html">Social Authentication</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

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
                                            Lorem ipsum dolor sit amet, consectetur adipisicing Voluptate nobis
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
                                    <li><a href="javascript:void(0);" title="">Our Facts</a></li>
                                    <li><a href="javascript:void(0);" title="">Confidentiality</a></li>
                                    <li><a href="javascript:void(0);" title="">About Us</a></li>
                                    <li><a href="javascript:void(0);" title="">Testimonials</a></li>
                                    <li><a href="javascript:void(0);" title="">Contact Us</a></li>
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
                            <h2>Dashboard</h2>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-12">
                        <div class="card top_report">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-dollar text-col-blue"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>EARNINGS</h6>
                                                <span class="font700">$22,500</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="87"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>SALES</h6>
                                                <span class="font700">$500</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="28"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-shopping-cart text-col-red"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>Orders</h6>
                                                <span class="font700">215</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-red mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="41"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-thumbs-up text-col-yellow"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>LIKES</h6>
                                                <span class="font700">21,215</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="75"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div id="Summary1" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card bg-success text-center">
                                        <div class="body">
                                            <input type="text" class="knob2" value="82" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#2e9a4a" data-fgColor="#ffffff" readonly>
                                            <h4 class="font-22 text-col-white mt-4">
                                                <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> 15%</small>
                                                Lead
                                                <span class="d-block font-13 mt-1">Last Week</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card bg-warning text-center">
                                        <div class="body">
                                            <input type="text" class="knob2" value="67" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#e8a70c" data-fgColor="#ffffff" readonly>
                                            <h4 class="font-22 text-col-white mt-4">
                                                <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> $95 M</small>
                                                Ballance
                                                <span class="d-block font-13 mt-1">Last Month</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div id="Summary2" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card text-center">
                                        <div class="body">
                                            <input type="text" class="knob2" value="60" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#eceeef" data-fgColor="#2e9a4a" readonly>
                                            <h4 class="font-22 mt-4">
                                                <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> 25%</small>
                                                Sales
                                                <span class="d-block font-13 mt-1">Last Week</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card bg-dark text-center">
                                        <div class="body">
                                            <input type="text" class="knob2" value="73" data-width="69" data-height="69" data-thickness="0.07" data-bgColor="#434b52" data-fgColor="#2e9a4a" readonly>
                                            <h4 class="font-22 text-col-white mt-4">
                                                <small class="font-12 d-block mb-1"><i class="fa fa-caret-up"></i> 40K</small>
                                                Profits
                                                <span class="d-block font-13 mt-1">Last Month</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card text-center">
                            <div class="header">
                                <h2>Connection</h2>
                            </div>
                            <div class="body pt-0">
                                <div class="row">
                                    <div class="col-12 m-b-15">
                                        <h1><i class="icon-user"></i></h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h4 class="font-22 text-col-green font-weight-bold">
                                            <small class="font-12 text-col-dark d-block m-b-10">Following</small>
                                            1255
                                        </h4>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h4 class="font-22 text-col-blue font-weight-bold">
                                            <small class="font-12 text-col-dark d-block m-b-10">Followers</small>
                                            3650
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="card overflowhidden">
                            <div class="header">
                                <h2>Analysis</h2>
                                <ul class="header-dropdown">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <h4>2598 <span class="font-13 d-block mt-2">New York</span></h4>
                                    </div>
                                    <div class="col-4 border-left border-right">
                                        <h4>8547 <span class="font-13 d-block mt-2">France</span></h4>
                                    </div>
                                    <div class="col-4">
                                        <h4>2707 <span class="font-13 d-block mt-2">Canada</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline" data-type="bar" data-offset="90" data-width="97%" data-height="50px" data-bar-Width="10" data-bar-Spacing="10" data-bar-Color="#7cb5ec">4,8,0,3,1,8,5,4,0,5,4,3,2,1,5,6,7,8,4,5,8,0,3</div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="card Sales_Overview">
                            <div class="header">
                                <h2>Sales Overview</h2>
                                <ul class="header-dropdown">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="Sales_Overview" class="ct-chart"></div>
                                <div class="body xl-slategray text-center">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4">
                                            <h2 class="font700">$15K</h2>
                                            <small>17% <i class="fa fa-level-up text-success"></i>
                                                Total Revenue</small>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <h2 class="font700">$1200</h2>
                                            <small>18% <i class="fa fa-level-down text-danger"></i>
                                                Current Month</small>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <h2 class="font700">$3489</h2>
                                            <small>18% <i class="fa fa-level-up text-success"></i>
                                                This Year</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="text-center">Site Traffic</h2>
                            </div>
                            <div class="body">
                                <div class="row text-center">
                                    <div class="col-6 border-right border-bottom pb-4 pt-4">
                                        <div id="Traffic1" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <label class="mb-0">Total User</label>
                                                    <h4 class="font-30 font-weight-bold text-primary">11,545</h4>
                                                </div>
                                                <div class="carousel-item">
                                                    <label class="mb-0">New User</label>
                                                    <h4 class="font-30 font-weight-bold text-success">7,326</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 border-bottom pb-4 pt-4">
                                        <div id="Traffic1" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <label class="mb-0">Chat</label>
                                                    <h4 class="font-30 font-weight-bold text-warning">542</h4>
                                                </div>
                                                <div class="carousel-item">
                                                    <label class="mb-0">Missed Chats</label>
                                                    <h4 class="font-30 font-weight-bold text-danger">73</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header">
                                <h2 class="text-center">Complated</h2>
                            </div>
                            <div class="body">
                                <div class="form-group">
                                    <label class="d-block">Positive Sentiment <span class="float-right">77%</span></label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Comments <span class="float-right">23%</span></label>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card weather2">
                            <div class="body city-selected">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="city"><span>City:</span> San Francisco</div>
                                        <div class="night">Day - 12:07 PM</div>
                                    </div>
                                    <div class="info col-7">
                                        <div class="temp">
                                            <h2>34°</h2>
                                        </div>
                                    </div>
                                    <div class="icon col-5">
                                        <i class="wi wi-day-cloudy-windy"></i>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped m-b-0">
                                <tbody>
                                    <tr>
                                        <td>Land area</td>
                                        <td class="font-medium">121.4 km²</td>
                                    </tr>
                                    <tr>
                                        <td>Humidity</td>
                                        <td class="font-medium">73%</td>
                                    </tr>
                                    <tr>
                                        <td>Pressure</td>
                                        <td class="font-medium">25.56 in</td>
                                    </tr>
                                    <tr>
                                        <td>Population</td>
                                        <td class="font-medium">8.65 lakhs</td>
                                    </tr>
                                    <tr>
                                        <td>Ceiling</td>
                                        <td class="font-medium">25280 ft</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item text-center active">
                                        <div class="col-12">
                                            <ul class="row days-list list-unstyled">
                                                <li class="day col-4">
                                                    <p>Monday</p>
                                                    <i class="wi wi-day-hail"></i>
                                                </li>
                                                <li class="day col-4">
                                                    <p>Tuesday</p>
                                                    <i class="wi wi-day-lightning"></i>
                                                </li>
                                                <li class="day col-4">
                                                    <p>Wednesday</p>
                                                    <i class="wi wi-day-storm-showers"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item text-center">
                                        <div class="col-12">
                                            <ul class="row days-list list-unstyled">
                                                <li class="day col-4">
                                                    <p>Thursday</p>
                                                    <i class="wi wi-day-hail"></i>
                                                </li>
                                                <li class="day col-4">
                                                    <p>Friday</p>
                                                    <i class="wi wi-showers"></i>
                                                </li>
                                                <li class="day col-4">
                                                    <p>Saturday</p>
                                                    <i class="wi wi-day-sunny"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Visitors </h2>
                                <ul class="header-dropdown">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="Visitors_chart" class="flot-chart m-b-25"></div>
                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <div class="body xl-turquoise">
                                            <h4>2,025</h4>
                                            <span>America</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <div class="body xl-parpl">
                                            <h4>1,025</h4>
                                            <span>Canada</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <div class="body xl-salmon">
                                            <h4>3,845</h4>
                                            <span>India</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                        <div class="body xl-slategray">
                                            <h4>863</h4>
                                            <span>Other</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>ToDo List <small>This Month task list</small></h2>
                                <ul class="header-dropdown">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body todo_list">
                                <ul class="list-unstyled mb-4">
                                    <li>
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox" checked>
                                            <span>Report Panel Usag</span>
                                        </label>
                                        <hr>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox">
                                            <span>Report Panel Usag</span>
                                        </label>
                                        <hr>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox">
                                            <span>New logo design for VueJs</span>
                                        </label>
                                        <hr>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox">
                                            <span>Design PSD files for clent</span>
                                        </label>
                                        <hr>
                                    </li>
                                    <li>
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox">
                                            <span>New logo design for VueJs</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>New</strong> Connections</h2>
                            </div>
                            <div class="body">
                                <ul class="right_chat list-unstyled mb-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Chris Fox</span>
                                                    <span class="message">Designer, Blogger</span>
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
                                                    <span class="message">Java Developer</span>
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
                                                    <span class="message">Art director, Movie Cut</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media mb-0">
                                                <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Alexander</span>
                                                    <span class="message">Writter, Mag Editor</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Marketing</strong> Campaign <small>This Month </small></h2>
                                <ul class="header-dropdown">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-5">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-facebook fa-2x"></i>
                                                </td>
                                                <td>
                                                    <p class="margin-0">Facebook Ads</p>
                                                    <span>1.2k Likes, 418 Shares</span>
                                                </td>
                                                <td>
                                                    <h6 class="m-b-0">$ 402</h6>
                                                    <span class="text-muted">Spent</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="text-success">
                                                        <i class="icon-graph"></i> 23
                                                    </div>
                                                    <div class="text-muted">up</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-twitter fa-2x"></i>
                                                </td>
                                                <td>
                                                    <p class="margin-0">Twitter Ads</p>
                                                    <span>1k Likes, 128 Shares</span>
                                                </td>
                                                <td>
                                                    <h6 class="m-b-0">$ 489</h6>
                                                    <span class="text-muted">Spent</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="text-danger">
                                                        <i class="icon-graph"></i>
                                                        -9
                                                    </div>
                                                    <div class="text-muted">down</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-instagram fa-2x"></i>
                                                </td>
                                                <td>
                                                    <p class="margin-0">Instagram Post</p>
                                                    <span>1k Follows, 228 Likes</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$ 718 </h6>
                                                    <span class="text-muted">Spent</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class=" text-success">
                                                        <i class="icon-graph"></i>
                                                        16
                                                    </div>
                                                    <div class="text-muted">up</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fa fa-linkedin fa-2x"></i>
                                                </td>
                                                <td>
                                                    <p class="margin-0">LinkedIn Post</p>
                                                    <span>1k Follows, 228 Likes</span>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">$ 768</h6>
                                                    <span class="text-muted">Spent</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="text-success">
                                                        <i class="icon-graph"></i>
                                                        27
                                                    </div>
                                                    <div class="text-muted">up</div>
                                                </td>
                                            </tr>
                                        </tbody>
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
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/chartist.bundle.js"></script>
    <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
    <script src="assets/bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
    <script src="../assets/vendor/flot-charts/jquery.flot.selection.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/index.js"></script>

</body>

</html>