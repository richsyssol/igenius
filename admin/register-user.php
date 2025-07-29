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
                                            <li class="breadcrumb-item active">Register-users</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Register Users</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <!-- <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Customers</a> -->
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                   <!--  <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button> -->
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Cafe Name</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <!-- <th>Orders</th> -->
                                                        <th>Last Order</th>
                                                        <!-- <th>created Date</th> -->
                                                        <th>Status</th>
                                                        <th style="width: 75px;">Action 
                                                            <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle card-drop arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical m-0 text-muted h3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                                <a class="dropdown-item" href="#">Add Members</a>
                                                <a class="dropdown-item" href="#">Add Due Date</a>
                                            </div>
                                        </div> <!-- end dropdown -->
                                    </th>
                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <!-- <label class="form-check-label" for="customCheck2">ABC</label> -->
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img  src="assets/images/users/user-4.jpg" alt="table-user" class="me-2" >
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                                        </td>
                                                        <td>
                                                            Bakery Cafe <br> <small class="text-muted">Nashik</small>
                                                        </td>
                                                        <td>050 414 8778</td>
                                                        <td>
                                                            demo@gmail.com
                                                        </td>
                                                        <!-- <td>
                                                            43
                                                        </td> -->
                                                        <td>
                                                            August 05 2019 <small class="text-muted">10:29 PM</small>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Active</span>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#view-register"> <i class="mdi mdi-eye"></i></a>
                                                           
                                                            <!-- <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal3"> <i class="mdi mdi-square-edit-outline"></i></a> -->
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-register"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck10">
                                                                <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-9.jpg" alt="table-user" class="me-2">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Anna Ciantar</a>
                                                        </td>
                                                        <td>
                                                            Bakery Cafe <br> <small class="text-muted">Nashik</small>
                                                        </td>
                                                        <td>
                                                            (216) 76 298 896
                                                        </td>
                                                        <td>
                                                            demo@gmail.com
                                                        </td>
                                                       
                                                        <td>September 12 2019 <small class="text-muted">07:22 AM</small></td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Pending</span>
                                                        </td>
                    
                                                        <td>
                                                             <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#view-register"> <i class="mdi mdi-eye"></i></a>
                                                            <!-- <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal3"> <i class="mdi mdi-square-edit-outline"></i></a> -->
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-register"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                                                <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-10.jpg" alt="table-user" class="me-2"> 
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Dean Smithies</a>
                                                        </td>
                                                        <td>
                                                            Bakery Cafe <br> <small class="text-muted">Nashik</small>
                                                        </td>
                                                        <td>
                                                            077 6157 4248
                                                        </td>
                                                        <td>
                                                            demo@gmail.com
                                                        </td>
                                                     
                                                        <td>October 09 2019 <small class="text-muted">07:22 AM</small></td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Active</span>
                                                        </td>
                    
                                                        <td>
                                                             <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#view-register"> <i class="mdi mdi-eye"></i></a>
                                                            <!-- <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal3"> <i class="mdi mdi-square-edit-outline"></i></a> -->
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-register"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck12">
                                                                <label class="form-check-label" for="customCheck12">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-1.jpg" alt="table-user" class="me-2" >
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                                        </td>
                                                        <td>
                                                            Bakery Cafe <br> <small class="text-muted">Nashik</small>
                                                        </td>
                                                        <td>
                                                            050 414 8778
                                                        </td>
                                                        <td>
                                                            demo@gmail.com
                                                        </td>
                                                       
                                                        <td>October 27 2019 <small class="text-muted">07:22 AM</small></td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Pending</span>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#view-register"> <i class="mdi mdi-eye"></i></a>
                                                            <!-- <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal3"> <i class="mdi mdi-square-edit-outline"></i></a> -->
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-register"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck13">
                                                                <label class="form-check-label" for="customCheck13">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-2.jpg" alt="table-user" class="me-2" >
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Rory Seekamp</a>
                                                        </td>
                                                        <td>
                                                            Bakery Cafe <br> <small class="text-muted">Nashik</small>
                                                        </td>
                                                        <td>
                                                            078 5054 8877
                                                        </td>
                                                        <td>
                                                            demo@gmail.com
                                                        </td>
                                                        
                                                        <td>April 21 2019 <small class="text-muted">07:22 AM</small></td>
                                                        <td>
                                                            <span class="badge badge-soft-danger">De-active</span>
                                                        </td>
                    
                                                        <td>
                                                             <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#view-register"> <i class="mdi mdi-eye"></i></a>
                                                            <!-- <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal3"> <i class="mdi mdi-square-edit-outline"></i></a> -->
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-register"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->



<?php include 'view-register-popup.php'?> 

<?php include 'footer.php'?>
