<?php
	include 'includes/session.php';

	if(isset($_POST['view'])){ 
        $output .= '';
        
        $sql = "SELECT *, employees.id as empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id WHERE employees.id = '$id'";
        $query = $conn->query($sql);
       
        while($row = $query->fetch_assoc()){
        $empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
        }
       /* while($row = $query->fetch_assoc()){
        $empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
        }
    }*/

   /* $sql = "UPDATE employees SET firstname = '$firstname', lastname = '$lastname', address = '$address', birthdate = '$birthdate', contact_info = '$contact', gender = '$gender', position_id = '$position', schedule_id = '$schedule' WHERE id = '$empid'";
    $query = $conn->query($sql); 
*/
    /*$sql = "UPDATE employees SET firstname = '$firstname', lastname = '$lastname', address = '$address', birthdate = '$birthdate', contact_info = '$contact', gender = '$gender', position_id = '$position', schedule_id = '$schedule' WHERE id = '$empid'";
    
    if($conn->query($sql)){
			$_SESSION['success'] = 'Employee updated successfully';
		}
    
    else{
			$_SESSION['error'] = $conn->error;
		}*/
	
    }
	header('location: employee.php');

?>

<!--"SELECT *, employees.id as empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id WHERE employees.id = '$id'";-->

<!--"SELECT firstname, lastname, address, birthdate, contact, gender, position, schedule FROM employees WHERE id = '$empid'";-->