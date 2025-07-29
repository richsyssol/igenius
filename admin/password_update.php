<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'setting.php';
	}

	if(isset($_POST['add'])){
		$curr_password = $_POST['curr_password'];
		$password = $_POST['password'];
		if(password_verify($curr_password, $admin['password'])){

			if($password == $admin['password']){
				$password = $admin['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("UPDATE distributor SET password=:password WHERE id=:id");
				$stmt->execute(['password'=>$password, 'id'=>$admin['id']]);

				$_SESSION['success'] = 'Password updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
			
		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	header('location:'.$return);

?>