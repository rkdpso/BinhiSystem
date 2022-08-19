<html>
<?php
    #include 'includes/session.php'
 session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>

<head>
    <style> 
	.login-box-body{
	margin-top: -90px;
        border-radius: 15px;
	background-color: #f1f1f1;
	}
    </style>
</head>

<body class="hold-transition login-page" OnLoad="document.myform.username.focus();">
<div class="login-page2"> <!--overlay-->
<div class="login-box">
  	<div class="login-logo2"> <!-- logo pic--> </div>
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="login.php" method="POST" name="myform">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Admin Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat signbut" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	</div>
<?php include 'includes/scripts.php' ?>
</body>
</html>