<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI Forkomlab - Peminjaman</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

		<!-- SCRIPTS -->
	    <!-- JQuery -->
	    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	    <!-- Bootstrap tooltips -->
	    <script type="text/javascript" src="js/tether.min.js"></script>
	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!--datepick-->
		<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>

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
                    <h1>Reservasi Laboratorium</h1>
                </div>
            </div>
            <hr>
            <form>
                <h3>
                    Untuk Lab :
                </h3>
                <label for="Lab">Pilih salah satu:</label>
                  <select class="form-control" id="Lab">
                    <option value="LP">LP</option>
                    <option value="LP2">LP2</option>
                    <option value="KCV">KCV</option>
                    <option value="AJK">AJK</option>
                  </select>
                <br>

                <h3>
                    Hari dan tanggal :
                </h3>

								<input type="date" class="datepicker">
									<br>
									<br>
									<br>
									<h3>
	                    Nama Penanggung jawab:
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
										Keperluan :
									</h3>
									<input type="text" name="penting">
									<br>
									<br>
									<br>

                <a class="btn btn-default" href="">Submit</a>
            </form>

        </div>
    </main>

		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>