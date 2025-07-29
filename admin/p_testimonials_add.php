<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$about = $_POST['about'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM parent_testi  WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Franhise Testimonial  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['image']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/parent/'.$new_filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO parent_testi (image, name, about, description, status) VALUES (:image, :name, :about, :description, :status)");
				$stmt->execute(['image'=>$new_filename,'name'=>$name, 'about'=>$about, 'description'=>$description, 'status'=>$status]);
				$_SESSION['success'] = 'Parent Testimonial added successfully';

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

	header('location: parent-testimonials.php');

?>