<!DOCTYPE html>
<?php
    include_once "login-sync.php";
  $date = new DateTime();
  $skrg = $date->getTimestamp();
 ?>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI Forkomlab - Saran</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        h3{
            text-align: left;
        }
    </style>
</head>

<body>
	<header>
        <!--Navbar-->
        <nav class="navbar fixed-top navbar-toggleable-md scrolling-navbar navbar-dark unique-color-dark">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href=".">
                    <strong>SI-Forkomlab</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="." class="nav-link">Home</a>
                        </li>
                        <li class="nav-item btn-group dropdown active">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laboratorium<span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item">LP</a>
                                <a class="dropdown-item">LP2</a>
                                <a class="dropdown-item">AJK</a>
                            </div>
                        </li>
                        <li class="nav-item navbar-toggler-right">
                            <?php
                                if($admin->isLoggedIn()){
                                    echo '<a href="logout.php" class="nav-link">Logout</a>';
                                }
                                else{
                                    echo '<a href="login.php" class="nav-link">Login</a>';
                                }
                            ?>

                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
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
                                                    <a class="btn btn-default" href="form-daftar-admin-anggota.php" style="width:400px">Daftarkan admin baru
                                                    </a><br>
                                                    <a class="btn btn-default" href="list_user.php" style="width:400px">Daftar Admin
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
                            <div class="col-md-4">


                                <div class="card mb-r">
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table large-header">
                                                <thead>
                                                    <tr>
                                                        <th>Pesan</th>
                                                        <th>Penulis</th>
                                                        <th>Pages</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Material Design</td>
                                                        <td>15</td>
                                                        <td>307</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bootstrap</td>
                                                        <td>32</td>
                                                        <td>504</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MDBootstrap</td>
                                                        <td>41</td>
                                                        <td>613</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Frontend</td>
                                                        <td>14</td>
                                                        <td>208</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSS Framework</td>
                                                        <td>24</td>
                                                        <td>314</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <button class="btn-flat waves-effect float-right">View full report</button>

                                    </div>

                                </div>

                            </div>


                        <br>
                        <div class="col-md-8">
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

                                    <button class="btn-flat waves-effect float-right">Lihat Semua saran</button>

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
