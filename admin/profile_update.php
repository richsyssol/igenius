<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'setting.php';
	}

	if(isset($_POST['save'])){
		$email = $_POST['email'];
		$first_name = $_POST['first_name'];
		$mobile = $_POST['mobile'];
		
			$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("UPDATE distributor SET email=:email, first_name=:first_name, mobile=:mobile WHERE id=:id");
				$stmt->execute(['email'=>$email, 'first_name'=>$first_name, 'mobile'=>$mobile, 'id'=>$admin['id']]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
			
		}
		
	
	else{
		$_SESSION['error'] = 'Fill up required details first';
	}

	header('location:'.$return);

?>