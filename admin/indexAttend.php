<html>
<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>

<head>
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
    <style>
      /* <link rel="stylesheet" href="../dist/css/AdminLTE.min.css"> 
	  */
	  
	 
	.login-box-body{
	margin-top: -90px;
	color:rgba(10.000000353902578, 113.00000086426735, 70.00000342726707, 1);
	}
	
	
.announce_tab { 
	width:418px;
	height:1300px;
	position:absolute;
	zoom:58%;
	left:50px;
	top:-229px;
	
	
}
.announcement { 
	width:418px;
	height:453px;
	position:absolute;
	left:0px;
	top:310px;
	
}
.announcement2 { 
	width:418px;
	height:453px;
	position:absolute;
	left:0px;
	top:795px;
	
}
.bgblack { 
	background-color:rgba(98.00000175833702, 189.00000393390656, 92.00000211596489, 0.5);
	width:418px;
	height:453px;
	position:absolute;
	left:0px;
	top:0px;
	mix-blend-mode: luminosity;
}
.a1 { 
	color:rgba(0, 0, 0, 1);
	width:319.6553649902344px;
	height:36px;
	position:absolute;
	left:51.44830322265625px;
	top:38px;
	font-family:Nunito Sans;
	font-weight: bold;
	text-align:left;
	font-size:30px;
	letter-spacing:0;
}
.info_box { 
	width:400.58905029296875px;
	height:354.7972106933594px;
	position:absolute;
	left:8.91259765625px;
	top:85.5314712524414px;
}
.infobg { 
	background-color:rgba(248.0000004172325, 248.0000004172325, 248.0000004172325, 0.8500000238418579);
	width:400.58905029296875px;
	height:354.7972106933594px;
	position:absolute;
	left:0px;
	top:0px;
	border-color: rgba(217, 194, 137, 0.50);
	border-style: solid;
}
.508_26 { 
	border:5px solid rgba(216.75000607967377, 194.34528350830078, 136.7331549525261, 1);
}
.what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit { 
	color:rgba(0, 0, 0, 1);
	width:375px;
	height:185px;
	position:absolute;
	left:25.08740234375px;
	top:159.468505859375px;
	text-align:left;
	font-size:22px;
	letter-spacing:0;
	line-height:normal;
}
.imageee { 
	background-color:rgba(217.0000022649765, 217.0000022649765, 217.0000022649765, 1);
	width:277px;
	height:135px;
	position:absolute;
	background-image:url(images/imageee.png);
	background-repeat:no-repeat;
	background-size:cover;
	left: 58px;
	top:12px;
}
.ellipse { 
	width:364.0453186035156px;
	height:15.919315338134766px;
	position:absolute;
	left:28.987688064575195px;
	top:15px;
	background-image:url(images/ellipseellipse.png);
}

.514_28 { 
	border:5px solid rgba(216.75000607967377, 194.34528350830078, 136.7331549525261, 1);
}
.imagee { 
	background-color:rgba(217.0000022649765, 217.0000022649765, 217.0000022649765, 1);
	width:277px;
	height:135px;
	position:absolute;
	background-image:url(images/imagee.png);
	background-repeat:no-repeat;
	background-size:cover;
	left: 10px;
	top:5px;
}
.vector { 
	width:32px;
	height:26px;
	position:absolute;
	left:32px;
	bottom: 0px;
	transform: rotate(180deg);
	background-image:url(images/Vectorarrow.png);
	
}

.vector2 { 
	width:32px;
	height:26px;
	position:absolute;
	left:352px;
	bottom:0px;
	transform: scaleY(-1);
	background-image:url(images/Vectorarrow.png);
	
	
}


    </style>
</head>

<body class="hold-transition login-page">
<div class="login-page2"> <!--overlay-->

	<div class=announce_tab>
			
              
            <div class=announcement><div  class="bgblack"></div>
			  <div class=ellipse></div>
              <span  class="a1">ANNOUNCEMENT #1</span>
              	
			 	<div class=info_box> 
					<div  class="infobg"></div>
					<div  class="imageee"></div>
			 
					<span  class="what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit">
					<label class=""> What: </label>  Lorem ipsum dolor sit <br>
					<label> When: </label> Lorem ipsum dolor sit  <br>
					<label> Where:</label> Lorem ipsum dolor sit  <br>
					<label> Who:  </label> Lorem ipsum dolor sit  <br>
					<label> Why:  </label> Lorem ipsum dolor sit dolor sitdolor sitdolor sit 
					</span> 
				</div>
              
			</div> 

			<div class=announcement2><div  class="bgblack"></div>
			  <div class=ellipse></div>
              <span  class="a1">ANNOUNCEMENT #1</span>
              	
			 	<div class=info_box> 
					<div  class="infobg"></div>
					<div  class="imageee"></div>
			 
					<span  class="what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit">
					<label class=""> What: </label>  Lorem ipsum dolor sit <br>
					<label> When: </label> Lorem ipsum dolor sit  <br>
					<label> Where:</label> Lorem ipsum dolor sit  <br>
					<label> Who:  </label> Lorem ipsum dolor sit  <br>
					<label> Why:  </label> Lorem ipsum dolor sit dolor sitdolor sitdolor sit 
					</span> 
				</div>
              
			</div> 
        

              
			<!--arrows--> <div  class="vector"></div> <div  class="vector2"></div>
    </div>


<div class="login-box">


    <div class="login-logo2"> <!-- logo pic--> </div>
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Employee ID" required autofocus>
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