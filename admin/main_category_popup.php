    <div class="offcanvas offcanvas-end" tabindex="-1" id="addnew" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Add Main Category</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="main_category_add.php" enctype="multipart/form-data" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label"> Main Category </label>
                    <input type="text" class="form-control" placeholder="Enter Main Category" name="main_category" required>
                    <div class="invalid-feedback">
                        Please Enter Main Category.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Main Category Logo </label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                </div>   
                <div class="mb-3">
                    <label for="position" class="form-label">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="Active">Active</option>
                            <option value="Deactive">Deactive</option>
                        </select>
                        <div class="invalid-feedback">
                            Please Select Status.
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" name="add" class="btn btn-success waves-effect waves-light">Submit</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="activate" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Status</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="main_category_status.php" enctype="multipart/form-data" novalidate>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="edit" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Edit Main Category</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="main_category_edit.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" class="catid" name="id">
                <div class="mb-3">
                    <label for="name" class="form-label"> Main Category </label>
                    <input type="text" class="form-control edit_main_category" placeholder="Enter Main Category" id="txt_firstCapital" name="main_category" required>
                    <div class="invalid-feedback">
                        Please Enter Main Category.
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" name="edit" class="btn btn-success waves-effect waves-light">Update</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_thumb" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Edit Thumbnail</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="needs-validation" method="POST" action="main_cat_logo_update.php" enctype="multipart/form-data" novalidate>
                <input type="hidden" class="catid" name="id">
                <div class="mb-3">
                    <label class="form-label">Main Category Logo </label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                </div>  
                <div class="text-end">
                    <button type="submit" name="edit" class="btn btn-success waves-effect waves-light">Update</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content modal-filled bg-danger">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-wrong h1 text-white"></i>
                        <h4 class="mt-2 text-white">Oh snap!</h4>
                        <p class="mt-3 text-white">Are You Sure You Wants to Delete?</p>
                        <form  method="POST" action="main_category_delete.php">
                            <input type="hidden" class="catid" name="id">
                            <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->