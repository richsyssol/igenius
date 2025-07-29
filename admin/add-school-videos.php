<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$status = $_POST['status'];
		$video_url = $_POST['video_url'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_school_video WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'school video already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		//	$filename = $_FILES['image']['name'];
		//	$now = date('Y-m-d');
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_school_video (video_url, status) VALUES (:video_url, :status)");
				$stmt->execute(['video_url'=>$video_url,'status'=>$status]);
				$_SESSION['success'] = 'School video added successfully';

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

	header('location: school-videos.php');

?>