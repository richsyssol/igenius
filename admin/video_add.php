<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$video_url = $_POST['video_url'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_videos WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'video  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_videos (video_url, name) VALUES (:video_url, :name)");
				$stmt->execute(['video_url'=>$video_url,'name'=>$name]);
				$_SESSION['success'] = 'Achivement added successfully';

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

	header('location: video.php');

?>