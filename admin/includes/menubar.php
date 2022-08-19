<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i><span class="text-primary"> Online </span></a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!--<li class="header">REPORTS</li>-->
            <li class=""><a href="home.php"><i class="fa fa-dashboard text-success"></i> <span class="text-success">Dashboard</span></a></li>
            <!-- <li class="header">MANAGE</li>-->

            <li><a href="attendance.php"><i class="fa fa-calendar text-success"></i> <span class="text-success">Attendance</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users text-success"></i>
                    <span class="text-success">Employees</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right text-success"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="employee.php"><i class="fa fa-circle-o text-success"></i> <span class="text-success">Employee List</span></a></li>
                    <li><a href="overtime.php"><i class="fa fa-circle-o text-success"></i> <span class="text-success"> Overtime</span></a></li>
                    <!-- <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Cash Advance</a></li> -->
                    <li><a href="schedule.php"><i class="fa fa-circle-o text-success"></i> <span class="text-success">Schedules </span></a></li>
                </ul>
            </li>
            <!-- <li><a href="deduction.php"><i class="fa fa-file-text"></i> Deductions</a></li> -->
            <li><a href="position.php"><i class="fa fa-suitcase text-success"></i> <span class="text-success">Positions</span></a></li>
            <!-- <li class="header">PRINTABLES</li> -->
            <!-- <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li> -->
            <li><a href="announcements.php"><i class="fa fa-clock-o text-success"></i> <span class="text-success">Announcements</span></a></li>
            <li><a href="contract.php"><i class="fa fa-hourglass text-success"></i> <span class="text-success"> Contractuals</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>