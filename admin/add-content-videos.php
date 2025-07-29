<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$video_url = $_POST['video_url'];
		$status = $_POST['status'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM content_video  WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Video already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
		
			try{
				$stmt = $conn->prepare("INSERT INTO content_video  (video_url, status) VALUES (:video_url, :status)");
				$stmt->execute(['video_url'=>$video_url,'status'=>$status]);
				$_SESSION['success'] = 'Content Video added successfully';

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

	header('location: content-video.php');

?>