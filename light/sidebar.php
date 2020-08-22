<?php include('common.php');


?>

<div id="leftsidebar" class="sidebar">
            <div class="sidebar-scroll">
                <nav id="leftsidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        </br>
                        <li class="active"><a href="<?php echo $base_url;?>index.php"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li class="heading">News</li>
                        <li class="middle">
                            <a href="#uiElements" class="has-arrow"><i class="icon-book-open"></i><span>News</span></a>
                            <ul>
                                <li><a href="<?php echo $base_url;?>news/add-news.php">Add Post</a></li>
                                <li><a href="<?php echo $base_url;?>news/news-list.php">News List</a></li>
                                <li><a href="<?php echo $base_url;?>news/breaking-news.php">Breaking News</a></li>
                                <li><a href="<?php echo $base_url;?>news/category.php">Category</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#forms" class="has-arrow"><i class="fa fa-camera"></i><span>Media Gallery</span></a>
                            <ul>
                                <li><a href="forms-validation.html">Add Picture</a></li>
                                <li><a href="forms-advanced.html">Add Video</a></li>
                                <li><a href="forms-basic.html">Image Gallery</a></li>
                                <li><a href="forms-wizard.html">Video Gallery</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms"><i class="fa fa-list-ul"></i><span>Archive</span></a>
                        </li>
                        <li class="heading">SEO & Analytics</li>
                        <li>
                            <a href="#Tables" class="has-arrow"><i class="fa fa-google"></i><span>Google</span></a>
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
                            <a href="#FileManager" class="has-arrow"><i class="icon-users"></i><span>User Management</span></a>
                            <ul>
                                <li><a href="<?php echo $base_url;?>user/reporter.php">Reporter</a></li>
                                <li><a href="<?php echo $base_url;?>user/user.php">User</a></li>
                            </ul>
                        </li>
                        <li class="heading">Advertisement Setting</li>
                        <li>
                            <a href="#FileManager" class="has-arrow"><i class="fa fa-bullhorn"></i><span>Advertisement</span></a>
                            <ul>
                                <li><a href="file-dashboard.html">New Advertisement</a></li>
                                <li><a href="file-documents.html">Update Advertisement</a></li>
                            </ul>
                        </li>

                        <li class="heading">Extra</li>
                        <li class="top">
                            <a href="<?php echo $base_url;?>extra/theme.php"><i class="fa fa-desktop"></i><span>Theme Activation</span></a>
                        </li>
                        <li class="top">
                            <a href="#Pages"><i class="fa fa-mail-forward"></i><span>Cache System</span></a>
                        </li>
                        <li class="top">
                            <a href="#Maps" class="has-arrow"><i class="fa fa-cog"></i> <span>Settings</span></a>
                            <ul>
                                <li><a href="<?php echo $base_url;?>extra/app-setting.php">App Setting</a></li>
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
                                                    <li><a href="<?php echo $base_url;?>user/logout.php"><i class="icon-power"></i>Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
