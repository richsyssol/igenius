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
                                            <li class="breadcrumb-item active">Booking </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Event Booking</h4>
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
                                                        <!-- <th>Order-Id</th> -->
                                                        <th>User Name</th>
                                                        <th>Cafe Name</th>
                                                        <th>Booking Date & Time</th>
                                                        <th>No.of Seats</th>
                                                        <th>Table No.</th>
                                                       
                                                        <!-- <th>created Date</th> -->
                                                        <th>Status</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck12">
                                                                <label class="form-check-label" for="customCheck12">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                       
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-1.jpg" alt="table-user" class="me-2">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                                        </td>
                                                        <td>
                                                            Bakery Cafe
                                                        </td>
                                                        <td>
                                                            August 05 2019<br> <small class="text-muted">10:29 PM</small>
                                                        </td>
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>2</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Pending</span>
                                                        </td>
                    
                                                        <td>
                                                             <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#custom-modal2"> <i class="mdi mdi-eye"></i></a>
                                                           <!--  <a href="javascript:void(0);" class="action-icon" > <i class="mdi mdi-square-edit-outline"></i></a>

                                                            
                                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-modal"> <i class="mdi mdi-delete"></i></a> -->
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

<?php include 'footer.php'?>