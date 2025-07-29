<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$qualification = $_POST['qualification'];
		$experience = $_POST['experience'];
		$about = $_POST['about'];

	try{
		$stmt = $conn->prepare("UPDATE tbl_career SET title=:title, qualification=:qualification, experience=:experience, about=:about  WHERE id=:id");
			$stmt->execute(['title'=>$title, 'qualification'=>$qualification, 'experience'=>$experience, 'about'=>$about, 'id'=>$id]);
			$_SESSION['success'] = 'Career updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Faq form first';
	}

	header('location:careers.php');

?>