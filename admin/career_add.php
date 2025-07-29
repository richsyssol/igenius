<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$qualification = $_POST['qualification'];
		$experience = $_POST['experience'];
		$about = $_POST['about'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM   tbl_career  WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'career  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
		
			try{
				$stmt = $conn->prepare("INSERT INTO  tbl_career (title, qualification, experience, about) VALUES (:title, :qualification, :experience, :about)");
				$stmt->execute(['title'=>$title,'qualification'=>$qualification, 'experience'=>$experience, 'about'=>$about]);
				$_SESSION['success'] = 'Career added successfully';

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

	header('location: careers.php');

?>