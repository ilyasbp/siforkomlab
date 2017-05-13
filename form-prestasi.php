<?php
	include 'header.php';
	include 'navbar.php';
 ?>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Pendataan piagam</h1>
                </div>
            </div>
            <hr>
            <form>
									<h3>
	                    Nama :
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
										Kejuaraan :
									</h3>
									<input type="text" name="juara">
									<br>
									<br>
									<br>
									<h3>
	                    Hari dan tanggal Event :
	                </h3>
										<input type="date" class="datepicker">
										<br>
										<br>
										<br>
									<h3>
										Peringkat :
									</h3>
									<input type="text" name="peringkat">
									<br>
									<br>
									<br>
									<h3>
										Scan sertifikat :
									</h3>
									<input type="file" name="paigam">
									<br>
									<br>
									<br>

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

                <a class="btn btn-default" href="">Submit</a>
            </form>

        </div>
    </main>

		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>

<?php
	include 'footer.php';
 ?>
