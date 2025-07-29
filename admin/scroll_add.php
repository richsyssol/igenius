<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$date = $_POST['date'];
		$compitation_menu = $_POST['compitation_menu'];
		$category = $_POST['category'];
		$exam_details = $_POST['exam_details'];
		$contact = $_POST['contact'];

			
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM  tbl_scroll_text WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Location already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_scroll_text (name, date, compitation_menu, category, exam_details, contact) VALUES (:name, :date, :compitation_menu, :category, :exam_details, :contact)");
				$stmt->execute(['name'=>$name,'date'=>$date, 'compitation_menu'=>$compitation_menu, 'category'=>$category, 'exam_details'=>$exam_details, 'contact'=>$contact]);
				$_SESSION['success'] = 'Location added successfully';

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

	header('location: scroll_text.php');

?>