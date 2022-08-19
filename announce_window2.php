<?php
require_once("conn.php"); 
    if(isset($_GET['page']))
        {
        $page = $_GET['page'];
    
        }
    else{
        $page = 1;
        
        }
    
        $num_per_page = 1;
        $start_from = ($page-1) * 1;
        $query = "SELECT * FROM announcements LIMIT $start_from, $num_per_page";
    $result = mysqli_query($conn, $query);
?>
<body>


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
    
    <style>
        .announce_tab {
            width: 418px;
            height: 887px;
            position: absolute;
            zoom: 58%;
            left: 50px;
            top:-200px;
            
        }

        .announcement {
            width: 418px;
            height: 453px;
            position: absolute;
            left: 0px;
            top: 310px;
        }

        .bgblack {
            background-color:rgba(249,248,245, .50);
            width: 418px;
            height: 907px;
            position: absolute;
            box-shadow: -10px 10px 5px gray;
            z-index:0;
        }

        .a1 {
            color: rgba(166,143, 99, 1);
            width: 319.6553649902344px;
            height: 36px;
            position: absolute;
            left: 51.44830322265625px;
            top: 55px;
            font-family: Nunito Sans;
            font-weight: bold;
            text-align: left;
            font-size: 30px;
            letter-spacing: 0;
        }

        .info_box {
            width: 387px;
            height: 692px;
            position: absolute;
            left: 12.91259765625px;
            top: 109px;
        }

        .infobg {
            background-color: rgba(248.0000004172325, 248.0000004172325, 248.0000004172325, 0.8500000238418579);    
            width: 387px;
            height: 722px;
            border: 6px #D9C289;
            border-style: solid;
        }

        .insidetext {
            color: rgba(0, 0, 0, 1);
            margin-left: 10px;
            margin-right: 8px;
            font-size: 26px;
            letter-spacing: 0;
            line-height: normal;
            z-index:1;
        }

        
        .ellipse {
            width: 364.0453186035156px;
            height: 15.919315338134766px;
            position: absolute;
            left: 28.987688064575195px;
            top: 22px;
            background-image: url(images/ellipse.png);
        }

      

        .vector {
            width: 32px;
            height: 26px;
            position: absolute;
            left: 32px;
            top:855px;
            transform: rotate(180deg);
            background-image: url(admin/images/Vectorarrow.png);
            opacity: 0.8;
            mix-blend-mode: overlay;

        }

        .vector2 {
            width: 32px;
            height: 26px;
            position: absolute;
            left: 352px;
            top:855px;
            transform: scaleY(-1);
            background-image: url(admin/images/Vectorarrow.png);
            opacity: 0.8;
            mix-blend-mode: multiply;
        }
        .pagenum {
            width: 32px;
            height: 26px;
            left: 152px;
            top:830px;
            font-size: 20px;
            letter-spacing: 10px;
            position:absolute;
            
               }

        .vector3 {
            width: 45px;
            height: 45px;
            position: absolute;
            left: 192px;
            top:845px;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(images/restart.png);
            opacity: 1;
            z-index:1;
        }
    </style>

<div class=announce_tab>

    <div class=announcement>
        <div class="bgblack">
            <div class=ellipse></div>

          

            <span class="a1"> <center>ANNOUNCEMENTS</center></span>
            <div class=info_box>
                <div class="infobg">
                    <div class="insidetext"> <br>
                    <?php      
                    while($row=mysqli_fetch_assoc($result)) { 
                        
                        ?>
                    <label class="text-success"> What: </label> 
                    <br> <?php echo  $row['announce_name']; ?> <br><br>
                    <label class="text-success"> When: </label> 
                    <br> <?php echo date('D, m-d-y',strtotime($row['date_start'])); ?> 
                    <br> <?php echo date('g:i a',strtotime($row['date_start'])); ?> - <?php echo date('g:i a',strtotime($row['date_end'])); ?> <br> <br>
                    <label class="text-success"> Where:</label> 
                    <br> <?php echo $row['announce_venue']; ?> <br> <br>
                    <label class="text-success"> Who: </label> 
                    <br> <?php echo $row['announce_persons']; ?> <br><br>
                    <label class="text-success"> Why: </label> 
                    <br> <?php echo $row['announce_details']; ?>
                    <?php } ?>
                    </div>  
                </div> 
            </div> 
        
            <?php
            $pr_query= "SELECT * FROM announcements";
            $pr_result = mysqli_query($conn, $pr_query);
            $total_record  = mysqli_num_rows($pr_result);
            $total_page = ceil($total_record/$num_per_page);
            
            /*if($page>1) {  
            echo "<a href='index.php?page=".($page-1)."' class='vector' id='prev'> </a>"; 
              }    

              for($i=1;$i<$total_page;$i++){
                echo "<a href='index.php?page=".$i."' class='pagenum'>   </a>"; 
                    } 
              
            
            if($page<$i ) { 
            echo "<a href='index.php?page=".($page+1)."' id='next'> <div class='vector2'> </div></a>"; 
              } 
            
              else if($page=$i)  { 
              
                echo "<a href='index.php?page=".($i-$page+1)."' id='restart'> <div class='vector3'> </div></a>"; 
                } */
              
             ?>
        </div>
            
       <!--arrows--> 
   </div>  
</div>

    <?php include 'scripts.php'; ?>
   <script>
        function myFunction() {
            
            var next = document.getElementById("next");
            next.click();
            }
        function restartSlide() {
            document.getElementById("restart").click();
            }
        
        setInterval(myFunction,2000);
        setTimeout(restartSlide, 2000);

        $(function() {

            $('.photo').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'admin/announce_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {

                    $('#announce_id').val(response.id);
                    $('#announce_no').val(response.announce_no);
                    $('#announce_name').val(response.announce_name);
                    $('#date_start').val(response.date_start);
                    $('#date_end').val(response.date_end);
                    $('#announce_venue').val(response.announce_venue);
                    $('#announce_persons').val(response.announce_persons);
                    $('#photo').html(response.photo);
                    $('#announce_details').val(response.announce_details);


                }
            });
        }
    </script>
</body>