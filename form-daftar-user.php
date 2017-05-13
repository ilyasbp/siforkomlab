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
                    NRP:
                </h3>
                <input type="text" name="nrp">
                <br>
                <br>
                <br>
								<h3>
                    Untuk Lab :
                </h3>
                <label for="lab">Pilih salah satu:</label>
                  <select class="form-control" name="lab">
                    <option value="1">LP</option>
                    <option value="2">LP2</option>
                    <option value="3">KCV</option>
                    <option value="4">AJK</option>
                  </select>
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
