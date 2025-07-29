<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$url = $_POST['url'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_math_video WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Banner already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
		
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_math_video (url, status) VALUES (:url, :status)");
				$stmt->execute(['url'=>$url,'status'=>$status]);
				$_SESSION['success'] = 'Math Url added successfully';

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

	header('location: math-calculation-videos.php');

?>