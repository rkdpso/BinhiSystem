<?php
require_once("conn.php"); 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<body>


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">

    <style>
        .announce_tab {
            position: absolute;
            zoom: 58%;
            left: 50px;
            top: -200px;
            margin-top: 120px;

        }

        .announcement {
            position: absolute;
            left: 0px;
            top: 310px;
        }

        .bgblack {
            background-color: rgba(249, 248, 245, .50);
            width: 500px;
            height: 907px;
            position: absolute;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            z-index: 0;
        }

        .a1 {
            color: rgba(166, 143, 99, 1);
            width: 500px;
            height: 36px;
            position: absolute;
            top: 60px;
            font-family: Nunito Sans;
            font-weight: bold;
            text-align: left;
            font-size: 30px;
            letter-spacing: 0;
        }

        .info_box {
            
            width: 450px;
            height: 950px;
            position: absolute;
            left: 22.91259765625px;
            top: 109px;
        }

        .infobg {
            background-color: rgba(248.0000004172325, 248.0000004172325, 248.0000004172325, 0.8500000238418579);
            border: 6px #D9C289;
            border-style: solid;
        }

        .insidetext {
            
            color: rgba(0, 0, 0, 1);
            margin-left: 14px;
            margin-right: 8px;
            font-size: 26px;
            letter-spacing: 0;
            line-height: normal;
            z-index: 1;
            text-align: left;
        }


        .ellipse {
            width: 500px;
            height: 15.919315338134766px;
            margin-left: 65px;
            position: absolute;
            background-repeat: no-repeat;
            top: 22px;
            background-image: url(images/ellipse.png);
        }

        .vector {
            width: 32px;
            height: 26px;
            position: absolute;
            left: 32px;
            top: 855px;
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
            top: 855px;
            transform: scaleY(-1);
            background-image: url(admin/images/Vectorarrow.png);
            opacity: 0.8;
            mix-blend-mode: multiply;
        }

        .pagenum {
            width: 32px;
            height: 26px;
            left: 152px;
            top: 830px;
            font-size: 20px;
            letter-spacing: 10px;
            position: absolute;

        }

        .vector3 {
            width: 45px;
            height: 45px;
            position: absolute;
            left: 192px;
            top: 845px;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(images/restart.png);
            mix-blend-mode: overlay;
            opacity: 1;
            z-index: 1;
        }
    </style>

    <div class=announce_tab>

        <div class=announcement>
            <div class="bgblack">
                <div class=ellipse></div>
                <span class="a1">
                    <center>ANNOUNCEMENTS</center>
                </span>
                <div class=info_box>
                    <div class="infobg">
                        <div class="insidetext" id="pagination_data"> <br>
                        </div>
                    </div>
                </div>
            </div>
            <!--arrows-->
        </div>
    </div>

    <?php include 'scripts.php'; ?>
    <script>
        $(document).ready(function() {
            load_data();

            function load_data(page) {
                $.ajax({
                    url: "pagination.php",
                    method: "POST",
                    data: {
                        page: page
                    },
                    success: function(data) {
                        $('#pagination_data').html(data);
                    }
                })
            }
            $(document).on('click', '.pagination_link', function() {
                var page = $(this).attr("id");
                load_data(page);


            });
        });
    </script>
</body>