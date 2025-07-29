<?php include 'includes/session.php'; ?>

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
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Blog Subtitle</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Blog Subtitle</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                      



<div class="modal fade" id="addSubtitle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
    <div class="modal-dialog">
             <form id="subtitleForm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Subtitle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
         


                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Subtitle</label>
                                <input type="text" name="subtitle" id="subtitle" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <select class="form-control" name="title_under" id="title_under">
                                    <option>Default</option>
                                    <?php
                                    $conn = $pdo->open();

                                    try {
                                        $stmt = $conn->prepare("SELECT * FROM tbl_blog_index Order By creation_on DESC");
                                        $cnt = 1;
                                        $stmt->execute();
                                        foreach ($stmt as $row) {


                                    ?>
                                            <option value="<?php echo $row['id']; ?>"><?= $row['name'] ?></option>

                                    <?php
                                        }
                                    } catch (PDOException $e) {
                                        echo $e->getMessage();
                                    }

                                    $pdo->close();
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control ckeditor " name="descr" rows="10" placeholder="Please enter Description" id="txtEditor" required></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                    <button type="submit" name="submit" class="btn btn-primary">Add Subtitle</button>
                </div>
           
        </div>
             </form>
             
             <script>
    
   document.getElementById('subtitleForm').addEventListener('submit',function(e){
       e.preventDefault();
       const userData = Object.fromEntries(new FormData(e.target).entries());
       
       async function addSubtitle(){
                   const response = await fetch("https://igenius.demovoting.com/admin/addSubtitle.php", {
                      method: "POST",
                      body: JSON.stringify(userData),
                       headers: {
                        "Content-Type": "application/json",
                      }
                    });
                    
                      const result = await response.json();
                      return result;
       }
       
       
       addSubtitle().then((status)=>{
           if(status===1){
               //render list
                 $('#addSubtitle').modal('hide');
           }
            $('#addSubtitle').modal('hide');
       });
       






  
   })
</script>
    </div>

</div>
<!--subtitle data table show -->
 <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                     <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap">
                                         <a  class="btn btn-danger buttons-html5" data-bs-toggle="modal" data-bs-target="#addSubtitle" data-bs-whatever="@getbootstrap"><i class="mdi mdi-plus-circle me-2"></i>Add Subtitle</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable-buttons_filter" class="dataTables_filter">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1244px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="srno: activate to sort column descending">Sr No</th>

                                            

                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Title</th>
                                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="srno: activate to sort column descending">Subtitle</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Description</th>

                                                  

                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Status: activate to sort column ascending">Creation Date</th>

                                                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                         <tbody>
                                        <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                            
                                              $stmt = $conn->prepare("SELECT blg_sub_name,blg_sub_desc,created_on,name FROM blog_subtitle
INNER JOIN tbl_blog_index ON blog_subtitle.blg_title_id = tbl_blog_index.id Order By creation_on DESC");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                                $image = (!empty($row['image'])) ? 'assets/images/blog/'.$row['image'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
                                        <tr class="odd">
                                            <td ><?php echo htmlentities($cnt++);?></td>
                                                
                                           
                                             <td> <?php echo $row['name']; ?></td>
                                     
                                            <td> <?php echo mb_strimwidth($row['blg_sub_name'], 0, 20, "..."); ?></td>
                                            <td> <?php echo mb_strimwidth($row['blg_sub_desc'], 0, 20, "..."); ?></td>
                                            <td><?php echo $row['created_on'];?></td>
                                            <td>
                                            <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                 <!-- item-->
                                               <!-- <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#activate" data-id="<?php echo $row['id'];?>" class="dropdown-item status"><i class="mdi mdi-plus-circle me-2 text-muted font-18 vertical-middle"></i></i>Change Status</a>-->
                                                <!-- item-->
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-banner" data-id="<?php echo $row['id'];?>" class="dropdown-item delete" style= "color: #c81515;"><i class="mdi mdi-delete me-2 font-18 vertical-middle" style= "color: #c81515;" ></i>Delete</a>
                                            </div>
                                        </div>
                                        </td>
                            
                                    </tr>
             <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>       
                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->





         
<?php include 'footer.php'?>

