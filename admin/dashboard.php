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
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        

                   <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                    <i class="fe-heart font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">47</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Revanue</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                    <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Orders</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                              <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                    <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">5</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Distributor </p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                    <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">58</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Users</p>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                            </div> 

                        </div>
                        <!-- end row-->

                    <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                           
                                        </div>
                                        <h4 class="header-title mb-0">Recently Register User</h4>

                                        <div id="cardCollpase5" class="collapse pt-3 show">
                                            <div class="table-responsive">
                                                 <table class="table table-centered table-striped dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>User Name</th>
                                                        <th>Category</th>
                                                        <th>Phone</th>
                                                        <th>Added Date</th>
                                                        <th>Status</th>
                                                      </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       
                                                        <td class="table-user">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                                        </td>
                                                        <td>
                                                           Chilly Powder
                                                        </td>
                                                        <td>
                                                            050 414 8778
                                                        </td>
                                                           <td>October 27 2019 <small class="text-muted">07:22 AM</small></td>
                                                       
                                                        <td>
                                                            <span class="badge badge-soft-success">Pending</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div> <!-- end table responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                                  <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                         <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                         </div>
                                    <h4 class="header-title mb-0">Recent Orders</h4>

                                       <div id="cardCollpase5" class="collapse pt-3 show">
                                            <div class="table-responsive">
                                            <div class="table-responsive">
                                                <table class="table table-centered table-striped dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>User Name</th>
                                                        <th>Product Name</th>
                                                        <th>Main Category</th>
                                                        <th>Product Price</th>
                                                        <!-- <th>Table No.</th> -->
                                                        <th>Status</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-user">
                                                          
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                                        </td>
                                                        <td>
                                                            Chilly
                                                        </td>
                                                        <td>
                                                          Chilly Powder
                                                        </td>
                                                        <td>
                                                            50
                                                        </td>
                                                        <td>2</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Pending</span>
                                                        </td>
                                                         <td>

                                             <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle card-drop arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical m-0 text-muted h3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#custom-modal2">View</a>
                                            </div>
                                        </div> <!-- end dropdown -->
                                       </td>
                                     </tr>
                                     </tbody>
                                    </table>
                                        </div> <!-- end <table></table> responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                           
                                        </div>
                                        <h4 class="header-title mb-0">Payment History</h4>

                                        <div id="cardCollpase5" class="collapse pt-3 show">
                                            <div class="table-responsive">
                                                  <table class="table table-centered table-striped dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                     
                                                        <th>Name</th>
                                                        <th>Card</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        
                                                        <!-- <th>created Date</th> -->
                                                        <th>Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Jon</td>
                                                        <td>Debit</td>
                                                        <td>20/5/22</td>
                                                        <td>1500</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Sucess</span>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            </div> <!-- end table responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                          
                        </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

              

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

<?php include 'footer.php'?>