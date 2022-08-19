<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition bg-success sidebar-mini" style="overflow:hidden">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="border-radius:15px 0px 0px 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Announcements List
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Event ID </th>
                                        <th>Name </th>
                                        <th>Date Start </th>
                                        <th>Date End </th>
                                        <th>Persons Involve </th>
                                        <th>Venue </th>
                                        <th>Additional Details </th>
                                        <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                    $sql = "SELECT * FROM announcements";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()) { 
                      ?>
                                        <tr>

                                            <td> <?php echo $row['announce_no']; ?> </td>
                                            <td> <?php echo $row['announce_name']; ?> </td>
                                            <td> <?php echo date('D, M-d-Y, g:ia',strtotime($row['date_start'])); ?> </td>
                                            <td> <?php echo date('D, M-d-Y, g:ia',strtotime($row['date_end'])); ?> </td>
                                            <td> <?php echo $row['announce_persons']; ?> </td>
                                            <td> <?php echo $row['announce_venue']; ?> </td>
                                            <td> <?php echo $row['announce_details']; ?> </td>

                                            <td>
                                                <button class='btn btn-danger btn-sm btn-flat delete' data-id=".$row['id']."><i class='fa fa-trash'></i> Delete</button>
                                            </td>
                                        </tr>
                                        <?php
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
        <?php include 'includes/announce_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function() {

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
                url: 'announce_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {

                    $('.announce_id').val(response.announce_id); /*for classes may dot sa una*/
                    $('#announce_no').val(response.announce_no);
                    $('#announce_name').val(response.announce_name);
                    $('#date_start').val(response.date_start);
                    $('#date_end').val(response.date_end);
                    $('#announce_persons').val(response.announce_persons);
                    $('#announce_venue').val(response.announce_venue);
                    $('#announce_details').val(response.announce_details);
                    $('#photo').val(response.photo);

                    /*for deletion*/
                    $('#del_announce_no').html(response.announce_no);
                    /*$('#del_id').html(response.id);*/
                    $('#del_announce_name').html(response.announce_name);

                    /*DELETE*/
                    $('#del_conjob').html(response.contract_job);
                    $('#del_conid').html(response.contract_no);
                    $('#del_condate').html(response.date);

                }
            });
        }
    </script>
</body>

</html>