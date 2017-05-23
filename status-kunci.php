<?php
    $page_title="Status Kunci";
    include_once "header.php"
?>

<body onload="startTime()">
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
            <div style="height:100px;"></div>

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
    
    <?php
        include "footer.php";
    ?>
    
</body>

</html>