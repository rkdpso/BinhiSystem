
<?php  
 //pagination.php  
 require_once("conn.php"); 
 $record_per_page = 1;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM announcements LIMIT $start_from, $record_per_page"; 
 $result = mysqli_query($conn, $query); 
 ?>
 <?php


                while($row=mysqli_fetch_assoc($result)) 
                { 
                        
                        $output .= ' <br> 
                    <label class="text-success"> What: </label> 
                    <br> '.$row["announce_name"].' <br><br>

                    <label class="text-success"> When: </label> 
                    <br> '.date('D, m-d-y',strtotime($row["date_start"])).'
                    <br> '.date('g:i a',strtotime($row["date_start"])).' - '.date('g:i a',strtotime($row["date_end"])).' <br> <br>
                    
                    <label class="text-success"> Where:</label> 
                    <br> '.$row["announce_venue"].' <br> <br>
                    
                    <label class="text-success"> Who: </label> 
                    <br> '.$row["announce_persons"].' <br><br>
                    
                    <label class="text-success"> Why: </label> 
                    <br> '.$row["announce_details"].' <br><br><br>
                    '; 
                }
                        $output .= '<div align="center">';

                    $page_query = "SELECT * FROM announcements";  
                    $page_result = mysqli_query($conn, $page_query);  
                    $total_records = mysqli_num_rows($page_result);  
                    $total_pages = ceil($total_records/$record_per_page);  
                    if($page>1) {  
                         $output .= "<span class='pagination_link' id='".($page-1)."' class='prev'> </span>";
                    }  
                   
                    for($i=1; $i<=$total_pages; $i++)  
                    {  
                         $output .= "<span class='pagination_link' style='cursor:pointer; margin:15px; padding:10px; border:1px solid #ccc; border-radius:15px' id='".$i."'>".$i."</span>";  
                        }   
                      
                        if($page<$i-1 ) { 
                        $output .= "<span class='pagination_link' class='next' id='".($page+1)."'> </span>";
                        }
                        else if($page=$i)  { 
              
                         $output .= "<span class='pagination_link' id='".($i-$page+1)."' class='restart'> </span>";
                    } 
                                    
                    $output .= '</div><br /><br />';  
                    echo $output;  
                    ?>  
          
          <?php include 'scripts.php'; ?>
          <script>

     function myFunction() {
            
            var next = document.getElementsByClassName("next");
            next.click();
            }
        function restartSlide() {
            document.getElementsByClassName("restart").click();
            }
        
            setInterval(myFunction,2000);
        setTimeout(restartSlide, 2000);


               </script>
            
     
           