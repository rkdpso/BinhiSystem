<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$announce_no = $_POST['id'];
		$announce_name = $_POST['announce_name'];
		$date_start = $_POST['date_start'];
		$date_end = $_POST['date_end'];
		$announce_persons = $_POST['announce_persons'];
		$announce_venue = $_POST['announce_venue'];
		$announce_details = $_POST['announce_details'];
		
		
		//creating 
		$letters = 'ANN';
		$numbers = '';
		
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$announce_no = substr(($letters), 0, 4).substr(str_shuffle($numbers), 0, 6);
		//
		$sql = "INSERT INTO announcements (announce_no, announce_name, date_start, date_end, announce_persons, announce_venue, announce_details ) VALUES ('$announce_no', '$announce_name', '$date_start', '$date_end', '$announce_persons', '$announce_venue', '$announce_details')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Announcement created successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: announcements.php');
?>