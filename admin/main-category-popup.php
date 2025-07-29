 <!-- active User Modal edit  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addnew" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Add Main Category</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form method="POST" action="category_add.php">
            <div class="mb-3">
                <label for="name" class="form-label">Main Category Title </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Disposable stretchable... ">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Main Category Logo </label>
                <input type="file" class="form-control" id="name" placeholder="Disposable stretchable... ">
            </div>   
   <!--  <div class="mb-3">
        <label for="position" class="form-label">Status</label>
        <select class="form-control">
            <option>Select Status</option>
            <option value="Active">Active</option>
            <option value="Deactive">Deactive</option>
        </select>
    </div> -->
                         
                           
                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light" name="add">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>

 <!-- active User Modal edit  -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="edit-main" aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Edit Main Category</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                         <form>
                              <div class="mb-3">
                                <label for="name" class="form-label">Main Category Title </label>
                                <input type="text" class="form-control" id="name" placeholder="Disposable stretchable... ">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Main Category Logo </label>
                                <input type="file" class="form-control" id="name" placeholder="Disposable stretchable... ">
                            </div>
                           
                            <div class="mb-3">
                                <label for="position" class="form-label">Status</label>
                                <select class="form-control">
                                    <option>Select Status</option>
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                            </div>
                         
                           
                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                            </div>
                        </form>
                  </div>
             </div>

 <!-- Danger Alert Modal Delete add-user -->
                                        <div id="delete-main" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-wrong h1 text-white"></i>
                                                            <h4 class="mt-2 text-white">Oh snap!</h4>
                                                            <p class="mt-3 text-white">Are You Sure You Wants to Delete?</p>
                                                             <form method="POST" action="category_delete.php">
                <input type="hidden" class="catid" name="id">
                                                            <button type="submit" class="btn btn-light my-2" name="delete">Yes</button>
                                                             <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->