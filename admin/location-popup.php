
 <!-- active User Modal add  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="add-banner" aria-labelledby="offcanvasExampleLabel">
                                         <div class="offcanvas-header">
                                                    <h5 id="offcanvasRightLabel">Add  Location</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                     <div class="offcanvas-body">
                    <form class="needs-validation" method="POST" action="location_add.php" enctype="multipart/form-data" novalidate>
					<div class="mb-3">
                        <label for="name" class="form-label"> Location </label>
						<select class="form-control" name="state_id" onChange="getcat(this.value);" required>
							<oprtion>Select State</option>
							<?php
								$conn = $pdo->open();

								$stmt = $conn->prepare("SELECT * FROM tbl_state");
								$stmt->execute();

								foreach($stmt as $crow){
								 // $selected = ($crow['id'] == $catid) ? 'selected' : ''; 
								  echo "
									<option value='".$crow['id']."' ".$selected.">".$crow['name']."</option>
								  ";
								}

								$pdo->close();
							  ?>
						</select>	
                    </div>
					<div class="mb-3">
                    	<label for="inputEmail4" class="col-form-label">district </label>
                         <select  class="form-control" name="city_id" id="city" required="">
                         </select>
                     </div>
					<div class="mb-3">
                        <label for="name" class="form-label"> Area </label>
                        <input type="text" class="form-control" name="area" placeholder="Enter Area" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> School Name </label>
                        <input type="text" class="form-control" name="name" placeholder="School Name">
                    </div>
						
                    <div class="mb-3">
                        <label for="name" class="form-label"> Authorized Franchise </label>
                        <input type="text" class="form-control" name="school_name" placeholder="Enter Authorized Franchise" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Address </label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                    </div>
                     <div class="mb-3">
                        <label for="name" class="form-label"> Contact No </label>
                        <input type="text" class="form-control" name="contact_no" placeholder="Enter Contact No" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Map </label>
                        <input type="url" class="form-control" name="map" placeholder="Enter Embed Map url" required>
                    </div>
                     <div class="mb-3">
                        <label for="name" class="form-label"> Status </label>
                        <select class="form-control" name="status" required>
                            <option value="Active">Active</option>
                             <option value="Deactive">Deactive</option>
                        </select>
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
                                                <form  method="POST" action="location-delete.php">
                                             <input type="hidden" class="catid" name="id">
                                             <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                                         <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->