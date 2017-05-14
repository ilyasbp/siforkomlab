<?php
    include_once "header.php";
    include_once "config/database.php";
    include_once "object/lab.php";
?>

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
	</header>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>LABORATORIUM</h1>
                </div>
            </div>

            <hr>
            <div class="row row-centered">
                <div class="col-md-6 col-centered">
                    <h2>Laboratorium Pemrograman</h2>
                </div>
                <div class="col-md-6 col-centered">
                    <a><button type="button" class="btn btn-info">LP</button></a>
                    <a><button type="button" class="btn default-color">Jadwal</button></a>
                    <a><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2>Laboratorium Pemrograman</h2>
                </div>
                <div class="col-md-6">
                    <a><button type="button" class="btn btn-info">LP</button></a>
                    <a><button type="button" class="btn default-color">Jadwal</button></a>
                    <a><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2>Laboratorium Pemrograman</h2>
                </div>
                <div class="col-md-6">
                    <a><button type="button" class="btn btn-info">LP</button></a>
                    <a><button type="button" class="btn default-color">Jadwal</button></a>
                    <a><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <div style="height:2000px;"></div>
        </div>
    </main>

	<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>