<?php include 'includes/session.php'; ?>

<?php include 'header.php'?>
<?php include 'left-menu.php'?>

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
                                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Career</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Career</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show'>
              <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show'>
              <button type='button' class='btn-close btn-close-white close' data-bs-dismiss='alert' aria-label='Close'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                     <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap">
                                         <a href="#add-faq" class="btn btn-danger buttons-html5" data-bs-toggle="offcanvas"><i class="mdi mdi-plus-circle me-2"></i> Add Career</a>
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

                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 199.4px;" aria-sort="ascending" aria-label="srno: activate to sort column descending">Title</th>

                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Qualification</th>
                                                      <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Experience </th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">About Role </th>

                                                   <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 146.4px;" aria-label="Name: activate to sort column ascending">Created Date</th>


                                                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 125.4px;" aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                         <tbody>
                                            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_career ");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                       
                        
                        ?>
                                            <tr class="odd">
                                                <td ><?php echo htmlentities($cnt++);?></td>
                                                 <td> <?php echo mb_strimwidth($row['title'], 0, 20, "..."); ?></td>
                                            <td> <?php echo mb_strimwidth($row['qualification'], 0, 20, "..."); ?></td>
                                              <td> <?php echo mb_strimwidth($row['experience'], 0, 20, "..."); ?></td>
                                                <td> <?php echo mb_strimwidth($row['about'], 0, 50, "..."); ?></td>
                                            
                                    <td>  <?php echo $row['creation_on'];?></td>
                           
                          <td>
                                            <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                         <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item edit" data-bs-toggle="offcanvas" data-bs-target="#edit-faq" data-id="<?php echo $row['id'];?>"> <i class="mdi mdi-square-edit-outline me-2 text-muted font-18 vertical-middle"></i>Edit</a>
                          <!-- item-->
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete"data-id="<?php echo $row['id'];?>" class="dropdown-item delete" style= "color: #c81515;"><i class="mdi mdi-delete me-2 font-18 vertical-middle" style= "color: #c81515;" ></i>Delete</a>
                            
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
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


<?php include 'career-popup.php'?>
<?php include 'footer.php'?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#active').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });
  
$(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'career_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.id);
      $('#edit_title').val(response.title);
      $('#edit_qualification').val(response.qualification);
      $('#edit_experience').val(response.experience);
      $('#edit_about').val(response.about);
      
    }
  });
}
</script>
