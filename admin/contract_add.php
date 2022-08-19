<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		/*$contract_no = $_POST['id'];*/
        $contract_job = $_POST['contract_job'];
		$date = $_POST['date'];
		$output = $_POST['output'];
		$rate = $_POST['rate'];
		$workers = $_POST['workers'];
        
        //creating contract no.
		$letters = 'JOB';
        $numbers = '';
		/*foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}*/
		for($i = 1; $i < 10; $i++){
			$numbers .= $i;
		}
		$contract_no = substr(($letters), 0, 3).substr(str_shuffle($numbers), 0, 7);
       
			$sql = "INSERT INTO contracts (contract_no, contract_job, date, output, rate, workers) VALUES ('$contract_no', '$contract_job', '$date', '$output', '$rate', '$workers')";
			
        if($conn->query($sql)){
				$_SESSION['success'] = 'Contract added successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: contract.php');

?>