<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];
	
		$conn = $pdo->open();
			$filename = $_FILES['banner']['name'];
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['banner']['tmp_name'], 'assets/images/course/banner/'.$new_filename);
			}

		try{
			$stmt = $conn->prepare("UPDATE tbl_course SET banner=:banner WHERE id=:id");
			$stmt->execute(['banner'=>$new_filename, 'id'=>$id]);
			$_SESSION['success'] = 'Banner updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select Banner to update photo first';
	}

	header('location: courses.php');
?>