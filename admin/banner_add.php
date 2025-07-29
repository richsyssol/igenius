<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$url = $_POST['url'];
		$status = $_POST['status'];
		$banner_type = $_POST['banner_type'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM banner WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Banner already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['image']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/banner/'.$new_filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO banner(url, image, status,banner_type) VALUES (:url, :image, :status, :banner_type)");
				$stmt->execute(['url'=>$url,'image'=>$new_filename,'status'=>$status, 'banner_type'=>$banner_type]);
				$_SESSION['success'] = 'Banner added successfully';

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

	header('location: banner.php');

?>