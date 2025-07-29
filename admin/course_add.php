<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_course WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'course  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['image']['name'];
			$filename1 = $_FILES['banner']['name'];
			$filename2 = $_FILES['c_image']['name'];
			$now = date('Y-m-d'); 
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/course/'.$new_filename);	
			}
			if(!empty($filename1)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename1, PATHINFO_EXTENSION);
				$new_filename1 = $rand.'.'.$ext;
				move_uploaded_file($_FILES['banner']['tmp_name'], 'assets/images/course/banner/'.$new_filename1);	
			}
			if(!empty($filename2)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename2, PATHINFO_EXTENSION);
				$new_filename2 = $rand.'.'.$ext;
				move_uploaded_file($_FILES['c_image']['tmp_name'], 'assets/images/course/contain/'.$new_filename2);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_course (image, banner, c_image, name, status) VALUES (:image, :banner, :c_image, :name, :status)");
				$stmt->execute(['image'=>$new_filename, 'banner'=>$new_filename1, 'c_image'=>$new_filename2, 'name'=>$name, 'status'=>$status]);
				$_SESSION['success'] = 'Course added successfully';

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

	header('location: courses.php');

?>