<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM faq WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'FAQ deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select FAQ to delete first';
	}

	header('location: faq.php');
	
?>