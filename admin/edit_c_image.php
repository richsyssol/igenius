<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['c_id'];
	
		$conn = $pdo->open();
			$filename = $_FILES['image']['name'];
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/course/contain/'.$new_filename);
			}

		try{
			$stmt = $conn->prepare("UPDATE tbl_course  SET c_image=:c_image WHERE id=:id");
			$stmt->execute(['c_image'=>$new_filename, 'id'=>$id]);
			$_SESSION['success'] = 'Contain Image updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select c_image to update photo first';
	}

	header('location: courses.php');
?>