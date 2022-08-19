<?php include 'includes/session.php'; ?>
<?php include 'includes/header2.php'; ?>

<body class="hold-transition  bg-success sidebar-mini" style="overflow:hidden;">
    <div class="wrapper">

        <?php include 'includes/navbar2.php'; ?>
        <?php include 'includes/menubar2.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="border-radius:15px 0px 0px 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Contractual Employees Payroll
                </h1>

            </section>
            <!-- Main content -->
            <section class="content">
                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="contract_print.php" class="btn btn-outline  bg-green-300 text-black rounded-full btn-sm pull-right"><span class="glyphicon glyphicon-print"></span> Payroll</a>
                                
                                 <a href="payslip_contract.php" class="btn btn-outline  bg-green-300 text-black rounded-full btn-sm pull-right"><span class="glyphicon glyphicon-print"></span> Payslip</a>
                            </div>
                            
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead class="bg-yellow-400 text-white rounded-xl ">
                                        <th class="hidden"></th>
                                        <th>Date</th>
                                        <th>Order ID</th>
                                        <th>Job</th>
                                        <th>Workers</th>
                                        <th>No. of Output</th>
                                        <th>Rate</th>
                                        <th>Total Amount</th>
                                    
                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * FROM contracts";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                        
                        $total = $row['rate'] * $row['output'];
                        
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".date('M d, Y', strtotime($row['date']))."</td>
                          <td>".$row['contract_no']."</td>
                          <td>".$row['contract_job']."</td>
                          <td>".$row['workers']."</td>
                          <td>".$row['output']."</td>
                          <td>".number_format($row['rate'],2)."</td>
                          <td>".number_format($total,2)."</td>
                        
                        </tr>
                      ";
                    }
                  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/contract_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function() {
             $('#payslip').click(function(e) {
                e.preventDefault();
                 $('#payslip').modal('show');
                var id = $(this).data('id');
                getRow(id);
                 //di pa final to di ko alamm pano
                $('#payForm').attr('action', 'payslip_contract.php');
                $('#payForm').submit();
            });
        });

    </script>
</body>

</html>