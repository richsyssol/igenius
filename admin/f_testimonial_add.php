<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$division = $_POST['division'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM franchise_testimonial  WHERE id=:id");
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
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/franchise/'.$new_filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO franchise_testimonial (image, name, division, description, status) VALUES (:image, :name, :division, :description, :status)");
				$stmt->execute(['image'=>$new_filename,'name'=>$name, 'division'=>$division, 'description'=>$description, 'status'=>$status]);
				$_SESSION['success'] = 'Franchise Testimonial added successfully';

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

	header('location: franchise-testimonials.php');

?>