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
                    <a href="http://lp.if.its.ac.id"><button type="button" class="btn btn-info">LP</button></a>
                    <a href="list_agenda_umum.php?id=1"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Laboratorium Pemrograman 2</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://lp2.if.its.ac.id"><button type="button" class="btn btn-info">LP2</button></a>
                    <a href="list_agenda_umum.php?id=2"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Arsitektur Jaringan Komputer</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://ajk.if.its.ac.id"><button type="button" class="btn btn-info">AJK</button></a>
                    <a href="list_agenda_umum.php?id=3"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Komputasi Cerdas dan Visi</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://kcv.if.its.ac.id"><button type="button" class="btn btn-info">KCV</button></a>
                    <a href="list_agenda_umum.php?id=4"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Komputasi Berbasis Jaringan</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://kbj.if.its.ac.id"><button type="button" class="btn btn-info">KBJ</button></a>
                    <a href="list_agenda_umum.php?id=5"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Rekayasa Perangkat Lunak</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://rpl.if.its.ac.id"><button type="button" class="btn btn-info">RPL</button></a>
                    <a href="list_agenda_umum.php?id=6"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Interaksi Grafika dan Seni</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://igs.if.its.ac.id"><button type="button" class="btn btn-info">IGS</button></a>
                    <a href="list_agenda_umum.php?id=7"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Algoritma dan Pemrograman</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://alpro.if.its.ac.id"><button type="button" class="btn btn-info">ALPRO</button></a>
                    <a href="list_agenda_umum.php?id=8"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h2>Manajemen Informasi</h2>
                </div>
                <div class="col-md-6">
                    <a href="http://mi.if.its.ac.id"><button type="button" class="btn btn-info">MI</button></a>
                    <a href="list_agenda_umum.php?id=9"><button type="button" class="btn default-color">Jadwal</button></a>
                    <a href="form-saran.php"><button type="button" class="btn warning-color">Saran</button></a>
                </div>
            </div>
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
<?php
  include "footer.php";
 ?>
