<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI Forkomlab</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    html,
    body,
    header,
    .view {
        height: 100%;
    }

    /*Intro*/
    .view {
        background: url("http://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20(5).jpg")no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>
    
</head>

<body>

    <header>
        <?php
            include_once "login-check.php";
            if($login){
                include_once "navbar.php";
            }
            else{
                include_once "navbar2.php";
            }
            
        ?>

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="white-text text-center wow fadeInUp">
                        <h2>Selamat datang di SI-FORKOMLAB</h2>
                        <h5>Jurusan Teknik Informatika ITS</h5>
                        <br>
                        <a href="lab.php"><button type="button" class="btn special-color-dark">Laboratorium</button></a>
                        <a href="status-kunci.php"><button type="button" class="btn stylish-color-dark">Kunci Parkir</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->
    </header>

    <!--Main layout-->
    <main class="pt-2 text-center">
        <div class="container">
            
            <div class="row">
                <div class="col text-center">
                    <h2>Oprec Admin Lab KCV</h2>
                    <h5>Telah dibuka Oprec Admin Lab KCV</h5>
                    <br>
                    <button type="button" class="btn btn-info">Baca</button>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col text-center">
                    <h2>Oprec Admin Lab KCV</h2>
                    <h5>Telah dibuka Oprec Admin Lab KCV</h5>
                    <br>
                    <button type="button" class="btn btn-info">Baca</button>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col text-center">
                    <h2>Oprec Admin Lab KCV</h2>
                    <h5>Telah dibuka Oprec Admin Lab KCV</h5>
                    <br>
                    <button type="button" class="btn btn-info">Baca</button>
                </div>
            </div>

        </div>
    </main>


    <footer>
    </footer>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <?php
        include "footer.php";
    ?>
    
</body>

</html>
