<header class="main-header">
    <!-- Logo -->

    <a href="home.php" class="logo text-green">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"> </span>
       <!--<p class="logo-img"> <img src="images/Logo.png" style="width:40px; height:40px; position:absolute; left:10px; top:10px;"> </p>

      logo for regular state and mobile devices -->
      <span class="logo-lg text-green"><b>Tric's</b> Rice Mill</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <!--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>-->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu " >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs text-success"><?php echo $user['firstname'].' '.$user['lastname']; ?></span>
            </a>
            <ul class="dropdown-menu bg-warning" style="border-radius:15px 0px 0px 15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
              <!-- User image -->
              <li class="user-header text-green bg-warning" style="border-radius:15px 0px 0px 0px;">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
              <!-- name -->
                <p class="text-green">
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
              <li class="user-footer" style="border-radius:0px 0px 0px 15px; color: ##fcf8e3">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-dark btn-flat bg-success text-black" id="admin_profile">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-dark btn-flat bg-success text-black">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php include 'includes/profile_modal.php'; ?>
  