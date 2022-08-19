    <?php
	$conn = new mysqli('localhost', 'root', '', 'dbinhi');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>