
 <!-- active User Modal add  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="add-banner" aria-labelledby="offcanvasExampleLabel">
                                         <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Add  Scroll Test</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                    <form class="needs-validation" method="POST" action="scroll_add.php" enctype="multipart/form-data" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Title </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">  Date </label>
                        <input type="date" class="form-control" name="date" placeholder="Enter School Name" >
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Vanue </label>
                        <input type="text" class="form-control" name="compitation_menu" placeholder="Enter Vanue" required>
                    </div>
                     <div class="mb-3">
                        <label for="name" class="form-label"> Category </label>
                        <input type="text" class="form-control" name="category" placeholder="Enter Category" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Exam Details </label>
                        <input type="text" class="form-control" name="exam_details" placeholder="Exam Details" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Contact </label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter Contact" required>
                    </div>
                    <div class="text-end">
                         <button type="submit" name="add" class="btn btn-success waves-effect waves-light">Submit</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
          </div>
     </div>

 

         <!-- Danger Alert Modal Delete add-user -->
                                        <div id="delete-banner" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-wrong h1 text-white"></i>
                                                 <h4 class="mt-2 text-white">Oh snap!</h4>
                                                 <p class="mt-3 text-white">Are You Sure You Wants to Delete?</p>
                                                <form  method="POST" action="scroll-delete.php">
                                             <input type="hidden" class="catid" name="id">
                                             <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                                         <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->