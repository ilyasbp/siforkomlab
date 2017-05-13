<?php
	include 'header.php';
	include 'navbar.php';
 ?>

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
                    Nama lengkap:
                </h3>
                <input type="text" name="nama">
                <br>
                <br>
                <br>
								<h3>
                    Jabatan:
                </h3>
                <input type="text" name="jabatan">
                <br>
                <br>
                <br>
								<h3>
                    Email :
                </h3>
                <input type="email" name="email">
                <br>
                <br>
                <br>
                <h3>
                <h3>
                    Judul Riset :
                </h3>
                <input type="text" name="riset">
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
