<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM  tbl_leaders WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Leaders deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Banner to delete first';
	}

	header('location: meet-our-leaders.php');
	
?>