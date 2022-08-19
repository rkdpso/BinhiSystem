<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE username = '$username'";
        #$query_run = mysqli_query($conn, $sql);
        #$row = mysqli_fetch_array($query_run);
		$query = $conn->query($sql);
        
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			     if(password_verify($password, $row['password'])){
				    $_SESSION['admin'] = $row['id'];
			     }
                else{
				    $_SESSION['error'] = 'Incorrect password';
			     }
            
            $_SESSION['usertype'] = $row['usertype'];
            if($row['usertype'] == 'hr'){
            $_SESSION['username'] = $username;
            header('location: home.php');
            exit(0);
            }
            
            elseif($row['usertype'] == 'acctg'){
            $_SESSION['username'] = $username;
            header('location: home2.php');
            exit(0);
            }
        }
		 
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
        
	}

	header('location: index.php');
?>