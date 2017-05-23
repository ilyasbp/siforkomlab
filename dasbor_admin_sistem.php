<!DOCTYPE html>
<?php
    $page_title="Dasboard Admin Sistem";
    // Lampirkan db dan User
    include_once "config/database.php";
    include_once "object/admin.php";
    include_once "login-check.php";
    //if($login){ header("location: login.php");}

    include_once "header.php";
  $date = new DateTime();
  $skrg = $date->getTimestamp();
 ?>

 <body>
	<header>
        <?php
            include_once "navbar2.php";
        ?>
	</header>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Dasbor</h1>
                </div>
            </div>
            <hr>

            <!--Main layout-->
            <main class="">

                <div class="container-fluid">

                    <!-- First row -->
                    <div class="row mb-1">

                        <div class="col-3">

                            <div class="data-card text-center">
                                <h3>104</h3>
                                <p>Jumlah user</p>
                            </div>

                        </div>
                        <div class="col-3">

                            <div class="data-card text-center">
                                <h3>420</h3>
                                <p>Jumlah prestasi</p>
                            </div>

                        </div>
                        <div class="col-3">

                            <div class="data-card text-center">
                                <h3>1 785</h3>
                                <p>Jumlah agenda  </p>
                            </div>

                        </div>
                        <div class="col-3">

                            <div class="data-card text-center">
                                <h3>890</h3>
                                <p>Jumlah Inbox saran</p>
                            </div>

                        </div>

                    </div>
                    <!-- /.First row -->

                    <!--Section: Main Chart-->
                    <section class="section">

                        <!--Main row-->
                        <div class="row">

                            <div class="col-md-12">
                                <!--Card-->
                                <div class="card card-cascade narrower">

                                    <!--Admin panel-->
                                    <div class="admin-panel">

                                        <!--First row-->
                                        <div class="row mb-0">

                                            <!--First column-->
                                            <div class="col-md-5">

                                                <!--Panel title-->
                                                <div class="view left primary-color">
                                                    <h2 style="color:white">Pengumuman</h2>
                                                </div>
                                                <!--/Panel title-->
                                                <br>
                                                <h3>
                                                  Server Time: <?php echo date('h:i:s')//->format('H:i:s');
                                                  ?>
                                                </h3>
                                                <h3>
                                                  Hari, tanggal: <?php echo date('D').", ".date('d-M-Y');
                                                   ?>
                                                </h3>
                                                <br>
                                                <br>
                                                  <h2><b>
                                                    Tidak Ada pengumuman
                                                  </b>
                                                  </h2>

                                            </div>
                                            <!--/First column-->

                                            <!--Second column-->
                                            <div class="col-md-7">
                                                <!--Cascading element-->
                                                <div class="view right primary-color mb-r">
                                                  <h2 style="color:white">
                                                    Pilihan lain
                                                  </h2>
                                                    <!--Main chart-->
                                                    <a class="btn btn-default" href="form-daftar-admin.php" style="width:400px">Daftarkan admin baru
                                                    </a><br>
                                                    <a class="btn btn-default" href="list_admin_lab.php" style="width:400px">Daftar Admin
                                                    </a><br>
                                                    <a class="btn btn-default" href="form-daftar-user.php" style="width:400px">Daftarkan user TA baru
                                                    </a><br>
                                                    <a class="btn btn-default" href="list_user.php" style="width:400px">Daftar User
                                                    </a><br>
                                                    <a class="btn btn-default" href="form-peminjaman.php" style="width:400px">Daftarkan Agenda
                                                    </a><br>
                                                    <a class="btn btn-default" href="list_agenda.php" style="width:400px">Daftar Agenda
                                                    </a><br>
                                                    <a class="btn btn-default" href="form-prestasi.php" style="width:400px">Daftarkan Prestasi
                                                    </a><br>
                                                    <a class="btn btn-default" href="list_prestasi.php" style="width:400px">Daftar Prestasi
                                                    </a><br>
                                                </div>
                                                <!--/Cascading element-->
                                            </div>
                                            <!--/Second column-->

                                        </div>
                                        <!--/First row-->

                                    </div>
                                    <!--/Admin panel-->

                                </div>
                                <!--/.Card-->
                            </div>

                        </div>
                        <!--/Main row-->
                        <br>
                        <div class="row">



                        <br>
                        <div class="col-md-12">
                            <div class="card mb-r">
                                <div class="card-block">
                                    <table class="table large-header">
                                        <thead>
                                            <tr>
                                                <th>Perihal</th>
                                                <th>Tanggal terima</th>
                                                <th>Buka</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Saran saja</td>
                                                <td>15-01-2017 : 20.30</td>
                                                <td><a href="#" class="btn btn-info">
                                                    Buka
                                                  </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Saran lain</td>
                                                <td>15-01-2017 : 21.30</td>
                                                <td><a href="#" class="btn btn-info">
                                                    Buka
                                                  </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Laporan Meja</td>
                                                <td>25-5-2017 : 02.30</td>
                                                <td><a href="#" class="btn btn-info">
                                                    Buka
                                                  </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Laporan pc</td>
                                                <td>10-06-2017 : 15.00</td>
                                                <td><a href="#" class="btn btn-info">
                                                    Buka
                                                  </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Saran</td>
                                                <td>22-05-2017 : 20.32</td>
                                                <td><a href="#" class="btn btn-info">
                                                    Buka
                                                  </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <a href="list_saran.php" class="btn-flat waves-effect float-right">Lihat Semua saran</a>

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

    
    <?php
        include "footer.php";
    ?>
    

</body>

</html>
