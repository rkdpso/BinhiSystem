<html>
<?php session_start(); ?>
<?php include 'header.php'; ?>


<style>
    .login-logo {
        /*date and time */
        font-size: 35px;
        text-align: center;
        margin-bottom: 15px;
        color: black;
        line-height: 47px;
    }

    #time {
        color: rgba(0, 0, 0, 1);
        font-family: Nunito Sans;
        text-align: center;
        font-size: 50px;
        letter-spacing: 0;

    }

    #date {
        color: rgba(0, 0, 0, 1);
        font-family: Nunito Sans;
        text-align: center;
        font-size: 24px;
        letter-spacing: 0;
    }

    .login-box-body {
        background-color: rgba(217.0000022649765, 194.00000363588333, 137.00000703334808, 1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 20px;
        border-top: 0;
        color: #666;
        width: 360px;
        height: 440px;
        margin-top: 0px;
        border-radius: 20px
    }

    .login-logooo {
        /*logo pic*/
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        width: 500px;
        height: 230px;
        background-image: url(images/tricslogo.png);


    }

    .logo-holder {
        /*logo pic*/

        width: 300px;
        height: 100px;
        zoom: 72%;
        margin-left: -22px;
        margin-top: 5px;
        margin-bottom: 150px;
    }

    /*fingerprint logo*/
    #flogo:link {
        color: green;
    }

    /* visited link */
    #flogo:visited {
        color: green;
    }

    /* mouse over link */
    a.#flogo::hover {

        background: url(image2.png);
        width: 50px;
        height: 50px;
    }

    /* selected link */
    #flogo:active {
        color: yellow;
    }

    .scanner .fingarprint {
        position: relative;
        width: 120px;
        height: 120px;
        left: 270px;
        background: url(image1.png);
        background-size: 40%;
        background-repeat: no-repeat;
    }

    .scanner .fingarprint::before {
        content: '';
        position: absolute;


        width: 120px;
        height: 120px;
        background: url(image2.png);
        background-repeat: no-repeat;
        background-size: 40%;

        animation: animate 4s ease-in-out infinite;
    }

    .scanner .fingarprint::after {
        content: '';
        position: absolute;
        top: 600;
        left: 975;
        width: 50%;
        height: 100px;
        background: #3fefef;
        background-size: 40%;
        background-repeat: no-repeat;
        border-radius: 8px;
        filter: drop-shadow(0 0 20px #3fefef) drop-shadow(0 0 60px #3fefef);
        animation: animate_line 4s ease-in-out infinite;
    }

    @keyframes animate {

        0%,
        100% {
            height: 0%;



        }

        50% {
            height: 60%;


        }
    }

    @keyframes animate_line {

        0%,
        100% {
            top: 0%;
            width: 50px;

        }

        50% {
            top: 70px;
            width: 50px;

        }
    }
</style>

<body class="hold-transition login-page" style="background-image: url(pexels_photo_by_pixabay.png); overflow:hidden;">
    <div class="login-page2">
        <!--overlay-->
        <div class="login-box">
            <div class="login-logo">
                <p id="time" class=""></p>
                <p id="date" class=""></p>
            </div>

            <div class="login-box-body">

                <div class="logo-holder">
                    <p class="login-logooo">
                        <!--logo pic-->
                    </p>
                </div>

                <h4 class="login-box-msg">Enter Employee ID</h4>

                <form id="attendance">
                    <div class="form-group">
                        <select class="form-control" name="status" style="border-radius: 8px;">
                            <option value="in">Time In</option>
                            <option value="out">Time Out</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <input style="border-radius: 8px;" type="text" class="form-control input-lg" id="employee" name="employee">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="scanner">
                        <div class="fingarprint"></div>
                    </div>

                    <div class="row">
                        <div id="myInput" class="col-xs-4" style="margin-top: -120px;">
                            <br><button id="myBtn" type="submit" class="btn btn-primary" name="signin"><i class="fa fa-sign-in"></i> Sign In</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
            </div>

            <div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
            </div>

            <?php include 'announce_window3.php'; ?>
        </div>

        <script src="DemoFingerprint/js/funciones.js" type="text/javascript"></script>
        <?php include 'scripts.php' ?>
        <script type="text/javascript">
            function myFunction() {
                var next = document.getElementsByClassName("next");
                next.click();
            }

            function restartSlide() {
                document.getElementsByClassName("restart").click();
            }

            setInterval(myFunction, 2000);
            setTimeout(restartSlide, 2000);


            /*Enter Function*/
            var input = document.getElementById("myInput");
            input.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("myBtn").click();
                }
            });

            window.onkeydown = function(event) {
                if (event.keyCode === 39) {
                    alert("Fingerprint unmatched!");
                }
            };
            
           /* window.onkeydown = function(event) {
                if (event.keyCode === 37) {
                    alert("Fingerprint success!");
                }
            };
            */

            
            $(function() {
                var interval = setInterval(function() {
                    var momentNow = moment();
                    $('#date').html(momentNow.format('dddd').substring(0, 3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));
                    $('#time').html(momentNow.format('hh:mm:ss A'));
                }, 100);

                $('#attendance').submit(function(e) {
                    e.preventDefault();
                    var attendance = $(this).serialize();
                    $.ajax({
                        type: 'POST',
                        url: 'attendance.php',
                        data: attendance,
                        dataType: 'json',
                        success: function(response) {
                            if (response.error) {
                                $('.alert').hide();
                                $('.alert-danger').show();
                                $('.message').html(response.message);
                            } else {
                                $('.alert').hide();
                                $('.alert-success').show();
                                $('.message').html(response.message);
                                $('#employee').val('');
                            }
                        }
                    });
                });

            });
        </script>
    </div>
</body>

</html>