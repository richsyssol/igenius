<?php include 'includes/session.php';?>
<?php
	if(isset($_POST['add'])){
		$conn = $pdo->open();
		$course_id = $_POST['course_id'];
		$title = $_POST['title'];
		$description = $_POST['description'];

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS total FROM course_faq WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['total'] > 0){
			$_SESSION['error'] = 'Faq already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
			//$now = date('Y-m-d');
			
			try{
			 $stmt = $conn->prepare("INSERT INTO course_faq(course_id, title, description) VALUES (:course_id, :title, :description)");
				$stmt->execute(['course_id'=>$course_id, 'title'=>$title, 'description'=>$description]);
				$_SESSION['success'] = 'Course Faq added successfully';

		    }
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
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
			$stmt = $conn->prepare("DELETE FROM course_faq WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Course Faq deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Type to delete first';
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
                                    <li class="breadcrumb-item active">Course Faq</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Course Faq</h4>
                        </div>
                    </div>
                </div>  
                
              
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Course Faq List</h5>
                                <table  class="table table-hover small-text">
                                        <tr class="tr-header col-md-12">
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Action</th>
                                        </tr>
                                         <?php
                                    include'includes/config.php';
                                    $id=intval($_GET['id']);
                                    $query=mysqli_query($conn,"SELECT * from course_faq where course_id='$id'");
                                    while($row2=mysqli_fetch_array($query))
                                    {
                                ?>
                                        <tr class="col-md-12">
                                            <td class="col-md-6" id="hidding_normal">
                                           <?php echo $row2['title'];?>
                                            </td>
                                             <td class="col-md-6" id="hidding_normal">
                                            <?php echo $row2['description'];?>
                                            </td>
                                            <td class="col-md-6" id="hidding_normal">
                                          <a class='delete' data-bs-toggle="modal" data-id="<?php echo $row2['id'];?>" href="#delete"><i class='fa fa-trash' style='color:red'></i></a>
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
                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Course Type Form</h5>
                                  <form  method="post" enctype="multipart/form-data">
                                     
                                       <input type="hidden" value="<?php echo $_GET['id'];?>" name="course_id">
                                    <div class="row">
                                         <div class="mb-3">
                                              <label>Question</label>
                                            <input type="text" class="form-control" placeholder="Enter Question" name="title">
                                         </div>
                                          <div class="mb-3">
                                               <label>Answer</label>
                                            <textarea class="form-control" placeholder="Enter Answer" name="description"></textarea>
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
    url: 'c_faq_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
    }
  });
}
</script>   