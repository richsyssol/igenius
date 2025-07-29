<?php
	include 'includes/session.php';
	if(isset($_POST['edit'])){
		$filename = $_FILES['thumbnail']['name'];
		$id = $_POST['id'];
		$conn = $pdo->open();

	
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			//$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'category/'.$new_filename);	
			}
			try{
				$stmt = $conn->prepare("UPDATE main_category SET thumbnail=:thumbnail WHERE id=:id");
				$stmt->execute(['thumbnail'=>$new_filename, 'id'=>$id]);
				$_SESSION['success'] = 'Main Category Logo Update successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
	

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: main_category.php');

?>