 <!-- active User Modal add  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="add-faq" aria-labelledby="offcanvasExampleLabel">
                                         <div class="offcanvas-header">
                                         <h5 id="offcanvasRightLabel">Add  FAQs</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="faq_add.php" enctype="multipart/form-data" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Add Queation  </label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Queation" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Add Answer </label>
                                <input type="text" class="form-control" name="descr" placeholder="Enter Answer" required>
                            </div>
                           <div class="mb-3">
                                <label for="position" class="form-label">Status</label>
                                <select class="form-control" name="status" required>
                                    <option>Select Status</option>
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                            </div>
                           
                            <div class="text-end">
                                <button type="submit" name="add" class="btn btn-success waves-effect waves-light">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>

 <!-- Status -->
             <div class="offcanvas offcanvas-end" tabindex="-1" id="faq" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Status</h5>
                         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                 </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="faq_status.php" enctype="multipart/form-data" novalidate>
                         <input type="hidden" class="catid mb-3" name="id">
                     
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



 <!-- active User Modal edit  -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="edit-faq" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">Edit FAQs</h5>
                                 <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                     <div class="offcanvas-body">
                         <form class="needs-validation" method="POST" action="faq_edit.php" enctype="multipart/form-data" novalidate>
                            <input type="hidden" class="catid mb-3" name="id">
                            <div class="mb-3">
                                <label for="name" class="form-label">Add Title </label>
                                <input type="text" class="form-control"  placeholder="Enter Title" id="edit_title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Add Description </label>
                                <input type="text" class="form-control" id="edit_descr" name="descr" placeholder="Enter Description">
                            </div>
                                <div class="text-end">
                                <button type="submit" name="edit" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
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
                                                <form  method="POST" action="faq_delete.php">
                                             <input type="hidden" class="catid" name="id">
                                             <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                                                 <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                 </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        