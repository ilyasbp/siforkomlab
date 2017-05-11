<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SI Forkomlab - Status Kunci</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body onload="startTime()">
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
                    <h1>Status Kunci Parkir</h1>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h1><strong>Status</strong></h1>
                    <hr>
                    <h3 id="tgl"></h3>
                    <h2 id="waktu"></h2>
                    <h1> Belum Diambil </h1>
                    <h5>Lokasi</h5>
                    <h3>Laboratorium Pemrograman</h3>
                </div>
                <div class="col-md-6">
                    <h1><strong>Jadwal</strong></h1>
                    <hr>
                    <h1> Belum Diambil </h1>
                    <h5>Lokasi</h5>
                    <h3>Laboratorium Pemrograman</h3>
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
    <!-- Server Date Javascript -->
    <script>
        function startTime() {
            var myMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('waktu').innerHTML = h + ":" + m + ":" + s;

            var day = today.getDate();
            var month = today.getMonth();
            var thisDay = today.getDay(),
                thisDay = myDays[thisDay];
            var yy = today.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;

            
            document.getElementById('tgl').innerHTML = thisDay + ', ' + day + ' ' + myMonths[month] + ' ' + year;


            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
</body>

</html>