<?php
	include 'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['add'])){
		$main_category = $_POST['main_category'];
		$slug = slugify($main_category);
		$status = $_POST['status'];
		$filename = $_FILES['thumbnail']['name'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM main_category WHERE slug=:slug");
		$stmt->execute(['slug'=>$slug]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Category already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'category/'.$new_filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO main_category (main_category, thumbnail, slug, status) VALUES (:main_category, :thumbnail, :slug, :status)");
				$stmt->execute(['main_category'=>$main_category, 'thumbnail'=>$new_filename, 'slug'=>$slug, 'status'=>$status]);
				$_SESSION['success'] = 'Category added successfully';

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

	header('location: main_category.php');

?>