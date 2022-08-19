<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$contract_job = $_POST['contract_job'];
		$date = $_POST['date'];
		$output = $_POST['output'];
		$rate = $_POST['rate'];
		$workers = $_POST['workers'];

		$sql = "UPDATE contracts SET contract_job = '$contract_job', date = '$date', output = '$output' , rate = '$rate' , workers = '$workers' WHERE id = '$id'";
		
        if($conn->query($sql)){
			$_SESSION['success'] = 'Overtime updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:contract.php');

?>