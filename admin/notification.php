<?php include 'includes/session.php'; ?>
<?php include 'header.php'?>
<?php include 'left-menu.php'?>
   <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            
                                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Notification</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Notification</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <!-- start chat users-->
                            <div class="col-md--12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="font-13 text-muted text-uppercase mb-2">Notification</h6>
                                        <!-- users -->
                                        <div class="row">
                                            <div class="col">
                                                <div data-simplebar >
                                                     <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT *, sales.id AS salesid FROM sales LEFT JOIN users ON users.id=sales.user_id WHERE sales.status='pending' ORDER BY sales_date DESC");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $stmt = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id WHERE details.sales_id=:id");
                        $stmt->execute(['id'=>$row['salesid']]);
                        $total = 0;
                        foreach($stmt as $details){
                          $subtotal = $details['price']*$details['quantity'];
                          $total += $subtotal;
                        }
                        ?>
                                         
                                        
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start p-2">
                                                            <img src="assets/images/users/user-2.jpg" class="me-2 rounded-circle" height="42" alt="Ricky J" />
                                                            <div class="w-100">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted fw-normal font-12"><?php echo $row['created_on'];?></span>
                                                                    New Order Placed
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                   <!--  <span class="w-75">Are you interested in learning?</span> -->
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                       <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?> 
                                                </div>
                                                <!-- end slimscroll-->
                                            </div>
                                            <!-- End col -->
                                        </div>                                        
                                        <!-- end users -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end chat users-->
<div class="row">
                            <div class="col-12">
                               <!--  <div class="text-center mb-3">
                                    <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                                </div> -->
                            </div> <!-- end col-->
                        </div>
                  

                        </div> <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

              

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

<?php include 'footer.php'?>