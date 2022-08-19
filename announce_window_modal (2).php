<?php include 'conn.php'; ?>
    
<?php
$file_name = $_FILES['files']['name'];
$tmp_name  = $_FILES['files']['tmp_name'];
$file_size = $_FILES['files']['size'];
$file_type = $_FILES['files']['type'];

// The codes written above work fine and have proper information.

$fp = fopen($tmp_name, 'rb'); // This one crashes.
$file_content = fread($fp, $file_size) or die("Error: cannot read file");
$file_content = mysql_real_escape_string($file_content) or die("Error: cannot read file");
fclose($fp);  
?>

<html>
<body>
<form action="testscript.php" method="POST" enctype="multipart/form-data">
   <input type="file" name="file">
   <input type ="submit" value="submit">
</form>

<?php
echo "Filename: " . $_FILES['file']['name']."<br>";
echo "Type : " . $_FILES['file']['type'] ."<br>";
echo "Size : " . $_FILES['file']['size'] ."<br>";
echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>";
echo "Error : " . $_FILES['file']['error'] . "<br>";
?>
      
</body>
<script>

</script>
        
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
            
            if($page>1) {  
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
                } 
              
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

        -->
</html>