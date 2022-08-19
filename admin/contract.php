<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition  bg-success sidebar-mini" style="overflow:hidden;">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="border-radius:15px 0px 0px 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Contracts
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-outline  bg-gray-300 text-blue rounded-full btn-sm"><i class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead class="bg-yellow-400 text-white rounded-xl ">
                                        <th class="hidden"></th>
                                        <th>Date</th>
                                        <th>Order ID</th>
                                        <th>Job</th>
                                        <th>No. of Output</th>
                                        <th>Workers</th>
                                        <th>Rate</th>
                                        <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * FROM contracts";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".date('M d, Y', strtotime($row['date']))."</td>
                          <td>".$row['contract_no']."</td>
                          <td>".$row['contract_job']."</td>
                          <td>".$row['output']."</td>
                          <td>".$row['workers']."</td>
                          <td>".number_format($row['rate'],2)."</td>
                          <td>
                            <button class='btn btn-outline btn-success bg-green-400 border-green-400 rounded-full btn-sm edit' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-outline btn-danger bg-gray-300 text-black rounded-full btn-sm delete' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
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
            $('.edit').click(function(e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('.delete').click(function(e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'contract_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    /*ADD*/
                    $('#id').val(response.id);
                    $('.contract_no').html(response.contract_no);
                    $('#contract_job').val(response.contract_job);
                    $('#date').val(response.date);
                    $('#output').val(response.output);
                    $('#rate').val(response.rate);
                    $('#workers').val(response.workers);
                    /*DELETE*/
                    $('#del_conjob').html(response.contract_job);
                    $('#del_conid').html(response.contract_no);
                    $('#del_condate').html(response.date);
                    /*EDIT*/
                    $('#conno').html(response.contract_no);
                    $('#conid').val(response.id);
                    $('#datepicker_edit').val(response.date);
                    $('#contract_job_edit').val(response.contract_job);
                    $('#output_edit').val(response.output);
                    $('#workers_edit').val(response.workers);
                    $('#rate_edit').val(response.rate);

                }
            });
        }
    </script>
</body>

</html>