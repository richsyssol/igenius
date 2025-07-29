<?php
	include 'includes/session.php';

	if(isset($_POST['edit_status'])){
		$id = $_POST['id'];
		$status = $_POST['status'];
	
		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM main_category WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();


		try{
			$stmt = $conn->prepare("UPDATE main_category SET status=:status WHERE id=:id");
			$stmt->execute(['status'=>$status, 'id'=>$id]);
			$_SESSION['success'] = 'Status updated successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Status form first';
	}

	header('location: main_category.php');

?>