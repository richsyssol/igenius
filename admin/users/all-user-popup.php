
             <div class="offcanvas offcanvas-end" tabindex="-1" id="activate" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Status</h5>

                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="status_change.php" enctype="multipart/form-data" novalidate>
                         <input type="hidden" class="userid mb-3" name="id">
                     
                        <div class="mb-3">
                         <select class="form-control" name="status">
                            <option>Select Status</option>
                             <option value="Active">Active</option>
                             <option value="Deactive">Deactive</option>
                         </select>
                           <div class="invalid-feedback">
                                Please Select Status.
                            </div>
                     </div>


                         <div class="text-end">
                                <button type="submit" name="edit_status" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="add" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Add Users</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="users_add.php" enctype="multipart/form-data" novalidate>
                          <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter First Name" required>
                                 <div class="invalid-feedback">
                                        Please Enter Full Name.
                                </div>
                            </div>
                        </div>
                         <div class="mb-3">
                                <label for="position" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="contact_info" name="contact_info" placeholder="078 5054 8877 " maxlength="10" onkeypress="return isNumberKey(event)" required>
                                 <div class="invalid-feedback">
                                        Please Enter Phone Number.
                                </div>
                            </div>
                             <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="demo@gmail.com" required>
                                <div class="invalid-feedback">
                                        Please Enter Email.
                                </div>
                            </div> 
                             <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="******* " required>
                                 <div class="invalid-feedback">
                                        Please Enter Password.
                                </div>
                            </div>  
                           
                                <div class="mb-3">
                                <label for="company" class="form-label">Status</label>
                                <select class="form-control" name="status" required>
                                    <option>Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Deactive">Deactive</option>
                                </select>
                                 <div class="invalid-feedback">
                                        Please Select Status.
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" name="add" class="btn btn-success waves-effect waves-light">Add</button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="edit" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Edit Users</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                     <div class="offcanvas-body">
                        <form class="needs-validation" method="POST" action="users_edit.php" enctype="multipart/form-data" novalidate>
                            <input type="hidden" class="userid" name="id">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fullname" id="edit_fullname" placeholder="Rory" required="">
                                <div class="invalid-feedback">
                                        Please Enter Full Name.
                                </div>
                            </div>
                           <div class="mb-3">
                                <label for="position" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="edit_contact" name="contact" placeholder="078 5054 8877 " maxlength="10" onkeypress="return isNumberKey(event)" required="">
                                <div class="invalid-feedback">
                                        Please Enter Phone Number.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="edit_email" name="email" placeholder="demo@gmail.com " required="">
                                 <div class="invalid-feedback">
                                         Please Enter Email.
                            </div>
                        </div>  
                            <div class="mb-3">
                    <label for="edit_password" class="form-label">Password</label>
                    <input type="password" class="form-control" class="form-control" id="edit_password" name="password" required="">
                    <div class="invalid-feedback">
                             Please Enter Password.
                    </div>
                </div>
                            <div class="text-end">
                                <button type="submit" name="edit" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>
  <!-- Danger Alert Modal Delete add-user -->
                                        <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-wrong h1 text-white"></i>
                                                            <h4 class="mt-2 text-white">Oh snap!</h4>
                                                            <p class="mt-3 text-white">Are You Sure You Wants to Delete?</p>
                                             <form method="POST" action="users_delete.php">
                                                    <input type="hidden" class="userid" name="id">
                                                     
                                                <button type="submit" class="btn btn-light my-2" name="delete"  name="delete">Yes</button>
                                                <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                              </form>
                                                        </div>
                                                   
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->



  
