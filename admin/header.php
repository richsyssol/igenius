<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
         <link rel="shortcut icon" href="assets/images/logo/3.png"> 
        <!-- App css -->
        <link href="assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
       <!-- third party css -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- Plugins css-->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
        
        <!-- Lightbox css -->
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

        <!-- <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" /> -->
        <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
        <script src="https://unpkg.com/dropzone"></script>
        <script src="https://unpkg.com/cropperjs"></script>

        <!-- <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="assets/croppie.css">

         <!-- <link rel="stylesheet" href="assets/css1/bootstrap/bootstrap.min.css"> -->
        <script src="assets/js1/vendor/modernizr-2.8.3.min.js"></script>
        
        <!-- css link-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    </head>
    <style>
    
        .image_area {
          position: relative;
        }

        img {
            /*display: block;*/
            max-width: 50%;

        }

        .preview {
            overflow: hidden;
            width: 160px; 
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        .modal-lg{
            max-width: 1000px !important;
        }

        .overlay {
          position: absolute;
          bottom: 10px;
          left: 0;
          right: 0;
          background-color: rgba(255, 255, 255, 0.5);
          overflow: hidden;
          height: 0;
          transition: .5s ease;
          width: 40%;
        }

        .image_area:hover .overlay {
          height: 50%;
          cursor: pointer;
        }

       
        </style>
        <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
        <!-- Begin page -->
            <div id="wrapper">
            <!-- Topbar Start -->
                <div class="navbar-custom" style="background-color:#e75b5b;">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-end mb-0">
                            <li class="dropdown d-inline-block d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
                        <!--    <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell noti-icon"></i>
                                   
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                               
                                            </span>Notification
                                        </h5>
                                    </div>
                                    <div class="noti-scroll" data-simplebar>
                                   
                                </div>
                    <a href="notification.php" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>
                </div>
            </li>-->
    
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img width="50" height="50" src="https://img.icons8.com/metro/26/FFFFFF/user-male-circle.png" alt="user-male-circle"/>
                    <span class="pro-user-name ms-1">
                        <?php echo $admin['first_name']; ?> <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
    
                   
    
                    <!-- item-->
                    <a href="setting.php" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- item-->
                    <a href="logout.php" class="dropdown-item notify-item" >
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
   <!--  data-bs-toggle="modal" data-bs-target="#warning-alert-modal" -->
                </div>
            </li>
    
         
        </ul>
    
        <!-- LOGO -->
          <div class="logo-box">
            <a href="index.php" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <!--<img src="assets/images/logo.png" alt="" height="22">-->
                    <span class="logo-lg-text-light"></span>
                </span>
                <span class="logo-lg">
                    <!--<img src="assets/images/logo.png" alt="" height="20">-->
                    <span class="logo-lg-text-light">Bake Wonders</span>
                </span>
            </a>
    
            <a href="index.php" class="logo logo-light text-center">
                <span class="logo-sm">
                    <!--<img src="assets/images/logo.png" alt="" height="40">-->
                </span>
                <span class="logo-lg">
                    <!--<img src="assets/images/logo.png" alt="" height="70">-->
                </span>
            </a>
        </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-dark">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
             
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
               
            </li>   
            
        </ul>
        <div class="clearfix"></div>
    </div>
</div>

