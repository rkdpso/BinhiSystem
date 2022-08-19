<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){

		$id = $_POST['id'];
		$announce_no = $_POST['announce_no'];
		
		$announce_name = $_POST['announce_name'];
		$date_start = $_POST['date_start'];
		$date_end = $_POST['date_end'];
		$announce_persons = $_POST['announce_persons'];
		$announce_venue = $_POST['announce_venue'];
		$announce_details = $_POST['announce_details'];
		
  		$sql = "UPDATE announcements SET announce_no = '$announce_no', announce_name = '$announce_name', date_start = '$date_start', date_end = '$date_end', announce_persons = '$announce_persons', announce_venue = '$announce_venue', announce_details = '$announce_details' WHERE id = '$id' ";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Announcement updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select announcement to edit first';
	}

	header('location: announcements.php');
?>