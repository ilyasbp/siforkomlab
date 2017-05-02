<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI Forkomlab - User Baru</title>
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
                            <a href="login.html" class="nav-link">Login</a>
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
                    <h1>Daftar user baru</h1>
                </div>
            </div>
            <hr>
            <form>
                <h3>
                    Nama user:
                </h3>
                <input type="text" name="nama">
                <br>
                <br>
                <br>
                <h3>
                    NRP :
                </h3>
                <input type="text" name="nrp">
                <br>
                <br>
                <br>
                <h3>
                    Password :
                </h3>
                <input type="password" name="psw">
                <br>
                <br>
                <br>
                <h3>
                    Jabatan :
                </h3>
								<div class="btn-group" data-toggle="buttons">
								  <label class="btn btn-primary active">
								    <input type="radio" name="jabatan" id="option1" autocomplete="off" checked> Administrator
								  </label>
								  <label class="btn btn-primary">
								    <input type="radio" name="jabatan" id="option2" autocomplete="off"> User TA
								  </label>
								</div>

								<!--<input type="radio" name="jab" value="admin"> <p>Admin</p>
                <input type="radio" name="jab" value="TA"> <p>User TA</p>
							-->
                <br>
                <br>
                <br>
                <p>Dengan ini menyetujui aturan dan syarat untuk menjadi anggota ForkomLAB Teknik Informatika ITS</p>
								<label class="btn btn-primary active">
							  	<input type="checkbox" name="setuju" checked autocomplete="off"> Saya setuju
							  </label>
                <br>
                <br>
                <br>
                <a class="btn btn-default" href="">Submit</a>
            </form>

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
	include('footer.php');
 ?>
