<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$area = $_POST['area'];
		$medium = $_POST['medium'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_clients WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Client already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_clients(name, area, medium, status) VALUES (:name, :area, :medium, :status)");
				$stmt->execute(['name'=>$name,'area'=>$area,'medium'=>$medium, 'status'=>$status]);
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

	header('location: our-valuable-clients.php');

?>