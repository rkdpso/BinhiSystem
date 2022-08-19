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
            height: 887px;
            position: absolute;
            mix-blend-mode: luminosity;
            box-shadow: -10px 10px 5px gray;
            
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
            height: 692px;
            position: absolute;
            border-color: rgba(217, 194, 137, 0.50);
            border-style: solid;
        }

        .what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit {
            color: rgba(0, 0, 0, 1);
            width: 375px;
            height: 185px;
            position: absolute;
            left: 25.08740234375px;
            top: 39.468505859375px;
            margin-right: 1;s
            text-align: left;
            font-size: 28px;
            letter-spacing: 0;
            line-height: normal;
            
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
            top:1130px;
            transform: rotate(180deg);
            background-image: url(admin/images/Vectorarrow.png);
            opacity: 0.8;

        }

        .vector2 {
            width: 32px;
            height: 26px;
            position: absolute;
            left: 352px;
            top:1130px;
            transform: scaleY(-1);
            background-image: url(admin/images/Vectorarrow.png);
            opacity: 0.8;


        }
    </style>


    <div class=announce_tab>

        <div class=announcement>
            <div class="bgblack">
            <div class=ellipse></div>
            <?php 
                    include 'conn.php'; 
                    $sql = "SELECT *, announcements.id AS a_id FROM announcements";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){ 
           

            <span class="a1"> <center>ANNOUNCEMENTS</center></span>
            <div class=info_box>
                <div class="infobg">
                <span class="what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit">
                echo "           <label class="text-success"> What: </label> 
                    <br> ".$row['announce_name']." <br><br>
                    <label class="text-success"> When: </label> 
                    <br> " .date('D, m-d-y',strtotime($row['date_start']))."
                    <br> ".date('g:i a',strtotime($row['date_start'])).' - '.date('g:i a',strtotime($row['date_end']))."<br> <br>
                    <label class="text-success"> Where:</label> 
                    <br> ".$row['announce_venue']." <br> <br>
                    <label class="text-success"> Who: </label> 
                    <br> ".$row['announce_persons']." <br><br>
                    <label class="text-success"> Why: </label> 
                    <br> ".$row['announce_details']."
                </span> </div> 
            </div>
            "; 
        } 
    ?>
        </div>
        
       <!--arrows--> 
        
        <button  class="vector" onclick="clickPrev()"> </button> 
        <button  class="vector2" onclick="clickNext()"></button>
    </div>  
    </div>


    <?php include 'scripts.php'; ?>
    <script>
        var roww =  document.getElementByClassName("infobg");

        const connection = mysql.createConnection({
        host: 'localhost',
        user: 'adminhr',
        password: '',
        });

const myInstance = new MySQLEvents(connection, { /*  */ });


     var i=0;

        function clickNext(n){
        
            setData(i+=n);
        }
        function clickPrev(){
            (if i <=0){
                    i=roww.length;
                    i--;
                    return roww;

                }

        }

        function setData(n){
            var b;
            var slides = document.getElementsByClassName("infobg");
            var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {i = 1} 
  if (n < 1) {slideIndex = slides.length} ;
        for (b = 0; b < slides.length; b++) {
          slides[b].style.display = "none"; 
        }
        for (b = 0; b < dots.length; b++) {
          dots[b].classList.remove("active");
        }
  slides[i-1].style.display = "block"; 
  dots[i-1].classList.add("active");

        }

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