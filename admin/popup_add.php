<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM  tbl_popup  WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'popup  already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['image']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
			    $rand= rand("000000","999999");
			    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $rand.'.'.$ext;
				move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/popup/'.$new_filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO  tbl_popup (image) VALUES (:image)");
				$stmt->execute(['image'=>$new_filename]);
				$_SESSION['success'] = 'Popup added successfully';

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

	header('location: popup_banner.php');

?>