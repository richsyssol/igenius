 <!-- active User Modal add  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="add-testimonial" aria-labelledby="offcanvasExampleLabel">
                                         <div class="offcanvas-header">
                                         <h5 id="offcanvasRightLabel">Add Testimonial</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                        
                             <div class="mb-3">
                                <label for="name" class="form-label">Add Rating  </label>
                                <!-- <input type="text" class="form-control" name="rating" placeholder="Enter Rating" required> -->
                        <h4 class="text-center mt-2 mb-3" >
                    <i class="fas fa-star star-light  mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                </h4>
                            </div>

                            <div class="form-group mb-3">
                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" required/>
                </div>
                <div class="form-group mb-3">
                    <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here" required></textarea>
                </div>
                <div class="form-group text-end mb-3">
                    <button type="button" class="btn btn-success waves-effect waves-light" id="save_review">Submit</button>
                </div>
                 
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
                                                <form  method="POST" action="test_delete.php">
                                             <input type="hidden" class="catid" name="id">
                                             <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                                                 <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                 </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        