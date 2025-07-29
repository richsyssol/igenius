<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$video_url = $_POST['video_url'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_franchise_video WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Video already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
		
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_franchise_video (video_url, status) VALUES (:video_url, :status)");
				$stmt->execute(['video_url'=>$video_url,'status'=>$status]);
				$_SESSION['success'] = 'Franchise Video added successfully';

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

	header('location: franchise-video.php');

?>