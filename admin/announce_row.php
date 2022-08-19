<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
/*
		$sql = "SELECT *, announcements.id AS announce_id FROM announcements";
*/
        $sql = "SELECT * FROM announcements WHERE id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>