<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$contact_info = $_POST['contact_info'];
		$status = $_POST['status'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		//	$filename = $_FILES['photo']['name'];
			$now = date('Y-m-d');
			try{
				$stmt = $conn->prepare("INSERT INTO users (email, password, fullname, contact_info, status, created_on) VALUES (:email, :password, :fullname, :contact_info, :status, :created_on)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'fullname'=>$fullname,'contact_info'=>$contact_info, 'status'=>$status, 'created_on'=>$now]);
				$_SESSION['success'] = 'User added successfully';
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

	header('location: all-user.php');

?>