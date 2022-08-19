<style>
    .bg {
        background-color: grey;
    }

    /* Make the image fully responsive */
    .carousel-inner img {
        width: 280px;
        height: 100%;
        margin-top: 150px;
    }

    #demo {
        padding: 20px;
        margin-left: 20px;
        margin-top: 20px;
        width: 300px;
        height: 700px;
        background-color: red;
    }
</style>

<body class="bg">

    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="1000">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="download.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="male6.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="thanossmile.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>