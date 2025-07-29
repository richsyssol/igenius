<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$descr = $_POST['descr'];
		$status = $_POST['status'];
		$created_on = $_POST['created_on'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM faq WHERE title=:title");
		$stmt->execute(['title'=>$title]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Faqs already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			//$filename = $_FILES['image']['name'];
			$now = date('Y-m-d');
			
			try{
				$stmt = $conn->prepare("INSERT INTO faq(title, descr, status, created_on) VALUES (:title, :descr, :status, :created_on)");
				$stmt->execute(['title'=>$title,'descr'=>$descr,'status'=>$status,'created_on'=>$now]);
				$_SESSION['success'] = 'Faqs added successfully';

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

	header('location:faq.php');

?>