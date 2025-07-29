        <!-- Modal -->
        <div class="modal fade" id="add-type" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add New Type</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Category</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Category">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Type Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Type">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Status</label>
                                <select  class="form-control" name="status"> 
<option value="">Select Status</option>  
<option value="Active">Active</option>
<option value="Deactive">Deactive</option>
</select>
                            </div>
                           
        
                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->





         <!-- Edit state Modal  -->
        <div class="modal fade" id="edit-type" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Edit Type</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body p-4">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Category</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Country">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Enter Type Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter City Name">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Status</label>
                                <select  class="form-control" name="status"> 
<option value="">Select Status</option>  
<option value="Active">Active</option>
<option value="Deactive">Deactive</option>
</select>
                            </div>
                           
        
                            <div class="text-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

  <!-- Danger Alert Modal Delete country -->
        
                                        <div id="delete-type" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-wrong h1 text-white"></i>
                                                            <h4 class="mt-2 text-white">Oh snap!</h4>
                                                            <p class="mt-3 text-white">Are You Sure You Wants to Delete?</p>
                                                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Yes</button>
                                                             <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->