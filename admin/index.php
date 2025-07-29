<?php 
  include 'includes/session.php';
?>
<?php include 'header.php'?>
<?php include 'left-menu.php'?>
<div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard </h4>
                                </div>
                            </div>
                        </div> 
                         <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle border-primary border" style="background-color:rgb(113, 57, 181);">
                                                    <i class="fe-airplay font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_course");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo " <h4 class='fs-22 fw-semibold'><span>".$urow['numrows']."  </span></h4>";?>
                                                    <p class="text-muted mb-1 text-truncate">Total Courses</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle border-success border" style="background-color:rgb(113, 57, 181);">
                                                    <i class="fe-airplay font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_videos");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo " <h4 class='fs-22 fw-semibold'><span>".$urow['numrows']."  </span></h4>";?>
                                                    <p class="text-muted mb-1 text-truncate">Total Videos</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle border-success border" style="background-color:rgb(113, 57, 181);">
                                                   <i class="fe-airplay font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                      <?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_photos");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo " <h4 class='fs-22 fw-semibold'><span>".$urow['numrows']."  </span></h4>";?>
                                                    <p class="text-muted mb-1 text-truncate">Total Photos</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                             
                            <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                                
<?php include 'footer.php'?>