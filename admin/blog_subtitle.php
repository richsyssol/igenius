<?php include 'includes/session.php';?>
<?php
	if(isset($_POST['add'])){

	    
		$conn = $pdo->open();
		$blog_title_id = $_POST['blog_title_id'];
		$blog_sub_name = $_POST['blog_sub_name'];
		$blog_sub_desc = $_POST['blog_sub_desc'];

	
		
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
			//$now = date('Y-m-d');
			$blog_id = intval($_GET['id']);
			try{
			 $stmt = $conn->prepare("INSERT INTO blog_subtitles(blog_sub_name, blog_sub_desc,blog_id,blog_title_id) VALUES (:blog_sub_name,:blog_sub_desc,:blog_id,:blog_title_id)");
			 
				$stmt->execute(['blog_sub_name'=>$blog_sub_name, 'blog_sub_desc'=>$blog_sub_desc, 'blog_id'=>$blog_id,'blog_title_id'=>$blog_title_id]);
				
				$_SESSION['success'] = 'Title has added successfully';

		    }
			catch(PDOException $e){
		
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

//	header('location: industries.php');

?>
<?php
	if(isset($_POST['delete'])){
	    

	    
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM blog_subtitles WHERE blog_sub_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Subtitle has deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Subtitle to delete first';
	}

//	header('location: active-franchise.php');
	
?>
<?php include 'header.php'?>
<?php include 'left-menu.php'?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">             
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Create Subtitle</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Create Subtitle</h4>
                        </div>
                    </div>
                </div>  
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
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Title's Subtitle List</h5>
                                <table  class="table table-hover small-text">
                                        <tr class="tr-header col-md-12">
                                            <th>Subtitle Name</th>
                                             <th>Title Name</th>
                                            <th>Subtitle Description</th>
                                            <th>Action</th>
                                        </tr>
                                         <?php
                                    include'includes/config.php';
                                    $id=intval($_GET['id']);
                                    $query=mysqli_query($conn,"SELECT * from blog_subtitles where blog_id='$id'");
                                    while($row2=mysqli_fetch_array($query))
                                    {
                                ?>
                                        <tr class="col-md-12">
                                            <td class="col-md-6" id="hidding_normal">
                                           <?php echo $row2['blog_sub_name'];?>
                                            </td>
                                                   <?php
                                
                               $title_id = $row2['blog_title_id'];
                                    $query_2=mysqli_query($conn,"SELECT * from blog_titles where blog_id='$id' AND blog_title_id='$title_id'");
                                    while($row3=mysqli_fetch_array($query_2))
                                    {
                                ?>
                                            
                                                 <td class="col-md-6" id="hidding_normal">
                                                 <?php echo $row3['blog_title_name'];?>
                                                </td>
                                                <?php
                                    }
                                                ?>
                                                
                                             <td class="col-md-6" id="hidding_normal">
                                            <?php echo $row2['blog_sub_desc'];?>
                                            </td>
                                            
                                            <td class="col-md-6" id="hidding_normal">
                                          <a class='delete' data-bs-toggle="modal" data-id="<?php echo $row2['blog_sub_id'];?>" href="#delete"><i class='fa fa-trash' style='color:red'></i></a>
                                            </td>
                                    </tr> 
                                     <?php } ?>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Add Subtitle</h5>
                                  <form  method="post" enctype="multipart/form-data">
                                     
                                       <input type="hidden" value="<?php echo $_GET['id'];?>" name="blog_id">
                                    <div class="row">
                                         <div class="mb-3">
                                              <label>Enter Subtitle</label>
                                            <input type="text" class="form-control" placeholder="Enter Name" name="blog_sub_name">
                                            </div>
                                            
                                               <div class="mb-3">
                                              <label>Select Title</label>
                                       <select class="form-control" name="blog_title_id">
                                           <option value="0">Select Title</option>
                                           <?php
                                               include'includes/config.php';
                               
                                    $query=mysqli_query($conn,"SELECT * from blog_titles where blog_id='$id'");
                                    while($row3=mysqli_fetch_array($query))
                                    {
                                           
                                           ?>
                                           
                                           <option value="<?=$row3['blog_title_id']?>"><?=$row3['blog_title_name']?></option>
                                           
                                           <?php
                                    }
                                           ?>
                                           
                                       </select>
                                            </div>
                                      
                                         <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Description</h5>
                                        <div class="mb-3">
                                            <textarea class="form-control ckeditor" name="blog_sub_desc" rows="10" placeholder="Please enter Description" id="txtEditor"></textarea>
                                            <div class="invalid-feedback">
                                                Please Enter Description
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="submit" name="add" class="btn w-sm btn-success waves-effect waves-light">Submit</button>
                                        <button type="reset" class="btn w-sm btn-success waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                                <form  method="POST">
                                             <input type="hidden" class="distid" name="id">
                                             <button type="submit" name="delete" class="btn btn-light my-2" >Yes</button>
                                         <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">No</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
     
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<?php include 'footer.php'?>
 <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
 <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#active').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'blog_subtitle_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
 
      $('.distid').val(response.blog_sub_id);
    }
  });
}






</script>   