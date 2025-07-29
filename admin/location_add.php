<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$state_id = $_POST['state_id'];
		$city_id = $_POST['city_id'];
		$area = $_POST['area'];
		$name = $_POST['name'];
		$school_name = $_POST['school_name'];
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$map = $_POST['map'];
		$status = $_POST['status'];

			
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM  tbl_location WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Location already taken';
		}
		else{
		//	$password = password_hash($password, PASSWORD_DEFAULT);
			
			try{
				$stmt = $conn->prepare("INSERT INTO tbl_location (state_id, city_id, area, name, school_name, address, contact_no, map, status) VALUES (:state_id, :city_id, :area, :name, :school_name, :address, :contact_no, :map, :status)");
				$stmt->execute(['state_id'=>$state_id,'city_id'=>$city_id,'area'=>$area,'name'=>$name,'school_name'=>$school_name, 'address'=>$address, 'contact_no'=>$contact_no, 'map'=>$map, 'status'=>$status]);
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

	header('location: locations.php');

?>