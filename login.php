<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SI Forkomlab - Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
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
                        <li class="nav-item btn-group dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laboratorium</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item">LP</a>
                                <a class="dropdown-item">LP2</a>
                                <a class="dropdown-item">AJK</a>
                            </div>
                        </li>
                        <li class="nav-item navbar-toggler-right active">
                            <a class="nav-link">Login<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
	</header>

		
	<main class="pt-6">
		<div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>LOGIN FORM</h1>
                </div>
            </div>
            <hr>

            <div class="row">
			    <div class="col-md-4"> </div> 
			    <div class="col-md-4">
			    	<!--Naked Form-->
			    		<br>
					    <div class="md-form">
					        <i class="fa fa-user prefix"></i>
					        <input type="text" id="form2" class="form-control text-center">
					        <label for="form2">Username</label>
					    </div>
					    <div class="md-form">
					        <i class="fa fa-lock prefix"></i>
					        <input type="password" id="form4" class="form-control text-center">
					        <label for="form4">Password</label>
					    </div>

					    <div class="text-center">
					        <button class="btn btn-deep-purple">Login</button>
					    </div>
					<!--Naked Form-->
			    </div> 
			    <div class="col-md-4"> </div>
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