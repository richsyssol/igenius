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
                                             <li class="breadcrumb-item"><a href="pending-cafe.php">Pending</a></li>
                                            <li class="breadcrumb-item active">Pending-cafe </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Pending Cafe</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-lg-6">
                              

                                
                                 <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 bg-light p-2">Busniess Details</h5>
                                         <div class="mb-3">
                                            <label for="product-name" class="form-label">Your Cafe Name <span class="text-danger">*</span></label>
                                            <input type="text" id="product-name" class="form-control" placeholder="e.g. My Cafe">
                                        </div>

                              <div class="row">
                                <label for="product-name" class="form-label">Location <span class="text-danger">*</span></label>
                                 <div class="col-md-6">
                            <label class="margin-15px-bottom">State <span class="required-error text-radical-red">*</span></label>
                                <select class="form-control margin-20px-bottom ">
                                <option>Maharastra</option>
                                <option>Goa</option>
                                <option>Andra Pradesh</option>
                            
                        </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="margin-15px-bottom">Country <span class="required-error text-radical-red">*</span></label>
                          <input type="text" name="" class="form-control" placeholder="India">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="margin-15px-bottom">Pincode<span class="required-error text-radical-red">*</span></label>
                            <input type="text" name="" class="form-control bg-white margin-20px-bottom" placeholder="422009">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="margin-15px-bottom">City <span class="required-error text-radical-red">*</span></label>
                            <select class="form-control margin-20px-bottom ">
                                <option>Nashik</option>
                                <option>Mumbai</option>
                                <option>Pune</option>
                                <option>Auragabad</option>
                                <option>Dhule</option>
                            </select>
                        </div>
                        </div>

                        <div class="mb-3">
                                 <label for="product-summary" class="form-label">Mobile Number</label>
                                 <input type="phone" name="" class="form-control" placeholder="e.g.00000-00000">
                        </div>

                        <div class="mb-3">
                                 <label for="product-summary" class="form-label">Alternet Mobile Number</label>
                                 <input type="phone" name="" class="form-control" placeholder="e.g.00000-00000">
                        </div>

                        <div class="mb-3">
                                 <label for="product-summary" class="form-label">Email</label>
                                 <input type="email" name="" class="form-control" placeholder="e.g.demo@gmail.com">
                            </div>

                             <div class="mb-3">
                               <label for="product-reference" class="form-label">Google Location <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="" placeholder="e.g. ">
                             </div>

                             <div class="mb-3">
                                 <label for="product-summary" class="form-label">Cafe Owner Name</label>
                                  <input type="text" name="" class="form-control" placeholder="e.g. demo">
                            </div> 
                         </div>
                      </div> <!-- end card-->

                            <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 bg-light p-2"> Owner Information</h5>

                                <div class="mb-3">
                                 <label for="product-name" class="form-label">Owner Name <span class="text-danger">*</span></label>
                                    <input type="text" id="product-name" class="form-control" placeholder="e.g. My Cafe">
                                        </div>

                             <div class="mb-3">
                                 <label for="product-summary" class="form-label">Owner Phone Number</label>
                                 <input type="phone" name="" class="form-control" placeholder="e.g.00000-00000">
                            </div>
                             <div class="mb-3">
                                 <label for="product-summary" class="form-label">Email</label>
                                 <input type="email" name="" class="form-control" placeholder="e.g.demo@gmail.com">
                            </div>
                           
                         </div>
                      </div> <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                 <h5 class="mb-3 bg-light p-2"> Hightlight</h5>
                                        
                                   <div class="mb-12 mt-2" >
                                      <div class="mb-3">
                            
                           <table  class="table table-hover small-text" id="tc">
                          <tr class="tr-header col-md-6">
                             <th><a href="javascript:void(0);" id="addMoree">+</a>
                             </th>
                            <th>Hightlight</th>
                          </tr>
                        <tr class="col-md-6">
                        <td>
                        <a href='javascript:void(0);'  class='remove'>x</a></td>
                        <td class="col-md-12" id="hidding_normal">
                             <input class="form-control" name="product_specifications[]" type="text" placeholder="Hightlight">
                             </td>
                            </tr> 
                             </table>
                            </div>
                            </div>
                      
                            </div>
                         </div> <!-- end card -->

                      <div class="card">
                        <div class="card-body">
                        <h5 class=" mt-0 mb-3 bg-light p-2"> Description</h5>
                     <div class="mb-3">
                        
                        <div id="snow-editor" style="height: 150px;">Description</div> 
                    </div>
                      </div>
                         </div> <!-- end card -->

                              <div class="card">
                                    <div class="card-body">
                                        <h5 class=" mt-0 mb-3 bg-light p-2"> Note</h5>
                                           <div class="row">
                                            <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> ABC </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> XYZ</label>
                                            </div>
                                        </div>
                                    
                                        </div>
                         <div class="mb-3">
                           <table  class="table table-hover small-text" id="tb">
                              <tr class="tr-header col-md-6">
                             <th><a href="javascript:void(0);" id="addMore">+</a>
                             </th>
                            <th>Other</th>
                          </tr>
                        <tr class="col-md-6">
                        <td>
                        <a href='javascript:void(0);'  class='remove'>x</a></td>
                        <td class="col-md-12" id="hidding_normal">
                             <input class="form-control" name="product_specifications[]" type="text" placeholder="Note">
                            
                             </td>
                            </tr> 
                             </table>
                           </div>
                            </div>
                         </div> <!-- end card -->


                          <div class="card">
                                    <div class="card-body">
                                        <h5 class=" mt-0 mb-3 bg-light p-2">Select Timing</h5>
                                        <!-- <p>A. Establishment Type</p> -->
                                      <div class="mb-3">
                                        <table cellpadding="10px" cellspacing="0px">
                                                <thead>
                                                <th class="col-md-3">Day</th>
                                                <th class="col-md-3 text-center">Open</th>
                                                <th class="col-md-3 text-center">Close</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Sunday</td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Monday</td>
                                                  <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>thusday</td>
                                                   <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wednsday</td>
                                                  <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thusday</td>
                                                  <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Friday</td>
                                                   <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Saturday</td>
                                                  <td>
                                                    <select class="form-control">
                                                        <option>12.00 AM</option>
                                                        <option>1.00 AM</option>
                                                        <option>2.00 AM</option>
                                                        <option>3.00 AM</option>
                                                        <option>4.00 AM</option>
                                                        <option>5.00 AM</option>
                                                        <option>6.00 AM</option>
                                                        <option>7.00 AM</option>
                                                        <option>8.00 AM</option>
                                                        <option>9.00 AM</option>
                                                        <option>10.00 AM</option>
                                                        <option>11.00 AM</option>
                                                        <option>12.00 AM</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>12.00 PM</option>
                                                        <option>1.00 PM</option>
                                                        <option>2.00 PM</option>
                                                        <option>3.00 PM</option>
                                                        <option>4.00 PM</option>
                                                        <option>5.00 PM</option>
                                                        <option>6.00 PM</option>
                                                        <option>7.00 PM</option>
                                                        <option>8.00 PM</option>
                                                        <option>9.00 PM</option>
                                                        <option>10.00 PM</option>
                                                        <option>11.00 PM</option>
                                                        <option>12.00 PM</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </div>
                          </div>
                        </div>
                            </div> <!-- end col -->

                 <div class="col-lg-6">
                          <div class="card">
                                    <div class="card-body">
                                        <h5 class=" mt-0 mb-3 bg-light p-2"> Early Morning Slots</h5>
                                          <div class="row">
                                           <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">7.00AM to 8.00AM</label>
                                            </div>
                                        </div>
                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">8.00AM to 9.00AM</label>
                                            </div>
                                        </div>
                                           
                                          </div>
                                        <h5 class=" mt-0 mb-3 bg-light p-2"> Morning Slots</h5>
                                          <div class="row">
                                           <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">9.00PM to 10.00PM</label>
                                            </div>
                                        </div>
                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">10.00PM to 11.00PM</label>
                                            </div>
                                        </div>
                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">11.00PM to 12.00PM</label>
                                            </div>
                                        </div>
                                          </div>
                                          <h5 class="mb-3 bg-light p-2"> Afternoon Slots</h5>
                                       
                                          <div class="row">
                                             <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">12.00PM to 1.00PM</label>
                                            </div>
                                        </div>
                                            
                                                <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">1.00PM to 2.00PM</label>
                                            </div>
                                        </div>
                                            
                                              <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">2.00PM to 3.00PM</label>
                                            </div>
                                        </div>
                                            
                                             <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">3.00PM to 4.00PM</label>
                                            </div>
                                        </div>
                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">4.00PM to 5.00PM</label>
                                            </div>
                                        </div>
                                           

                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">5.00PM to 6.00PM</label>
                                            </div>
                                        </div>
                                          </div>
                                        <h5 class="mb-3 bg-light p-2"> Evening Slots</h5>
                                       
                                          <div class="row">
                                            
                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">6.00PM to 7.00PM</label>
                                            </div>
                                        </div>
                                           
                                            <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">7.00PM to 8.00PM</label>
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">8.00PM to 9.00PM</label>
                                            </div>
                                        </div>
                                           
                                            <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> 9.00PM to 10.00PM</label>
                                            </div>
                                        </div>
                                             <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> 10.00PM to 11.00PM </label>
                                            </div>
                                        </div>
                                         <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> 11.00PM to 12.00PM </label>
                                            </div>
                                        </div>
                                          </div>
                                            <h5 class="mb-3 bg-light p-2"> Night Slots</h5>
                                       
                                          <div class="row">
                                            
                                            <div class="col-md-4 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">12.00AM to 1.00AM</label>
                                            </div>
                                        </div>
                                           
                                            <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">1.00AM to 2.00AM</label>
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox">2.00AM to 3.00AM</label>
                                            </div>
                                        </div>
                                           
                                            <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> 3.00AM to 4.00AM</label>
                                            </div>
                                        </div>
                                             <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> 5.00AM to 6.00AM </label>
                                            </div>
                                        </div>
                                          </div>

                         </div> <!-- end card -->
                        </div>
                          <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 bg-light p-2">Add Tables Seats & Type</h5>
                                             <div class="mb-3">
                                          <!--   <label class="mb-2">Status <span class="text-danger">*</span></label> -->
                                            <br/>
                                             <div class="row">
                                           

                                        <div class="w-100">
                                             <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <input type="number" name="" class="float-end" placeholder="e.g. 2" style="width: 90px">
                                                <h5 class="mt-0 mb-1">Couple</h5>
                                            </div>
                                            </div>
                                            <div class="w-100 mb-3">
                                             <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <input type="number" name="" class="float-end" placeholder="e.g. 8" style="width: 90px">
                                                <h5 class="mt-0 mb-1">Family</h5>
                                            </div>
                                            </div>

                                            <div class="w-100 mb-3">
                                             <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <input type="number" name="" class=" float-end" placeholder="e.g. 15" style="width: 90px">
                                                <h5 class="mt-0 mb-1">Group</h5>
                                            </div>
                                            </div>

                                        <div class="w-100">
                                             <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <input type="number" name="" class="float-end" placeholder="e.g. 10" style="width: 90px">
                                                <h5 class="mt-0 mb-1">Mixup</h5>
                                            </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div> <!-- end card -->

                            <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 bg-light p-2">Cafe Special</h5>
                                          <!--   <label class="mb-2">Status <span class="text-danger">*</span></label> -->
                                            <br/>
                                             <div class="row">
                                            <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> Beverages </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label for="checkbox"> Biryani </label>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    </div>
                                </div> <!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class=" mt-0 mb-3 bg-light p-2">Table Image</h5>

                                        <form action="https://coderthemes.com/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                         <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 bg-light p-2">Thumbnail Images</h5>

                                        <form action="https://coderthemes.com/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                                    <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 bg-light p-2">Gallery</h5>

                                        <form action="https://coderthemes.com/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                         </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                    
                                    <button type="button" class="btn w-sm btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#success-alert-modal">Update</button>
                                    <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                <i class="dripicons-cross"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

<?php include 'footer.php'?>



<script>
$(function(){
    $('#addMoree').on('click', function() {
              var data = $("#tc tr:eq(1)").clone(true).appendTo("#tc");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>

<script>
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>