<?php
    $page_title="Tambah Prestasi";
	include 'header.php';
	include 'navbar2.php';
 ?>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Pendataan Piagam</h1>
                </div>
            </div>
            <hr>
            <form method="post" action="insert-data.php">
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
	                    Hari dan Tanggal Event :
	                </h3>
					<input type="date" class="datepicker" name="haritgl">
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
						Scan Sertifikat :
					</h3>
					<input type="file" name="piagam">
					<br>
					<br>
					<br>
					<h3>
	                    Untuk Lab :
	                </h3>
	                <label for="Lab">Pilih salah satu:</label>
 	                <select class="form-control" id="Lab" name="lab">
	                <option value="1">LP</option>
	                <option value="2">LP2</option>
	                <option value="3">AJK</option>
	                <option value="4">KCV</option>
	                <option value="5">RPL</option>
                    <option value="6">NCC</option>
                    <option value="7">MI</option>
                    <option value="8">IGS</option>
                    <option value="9">MIS</option>
	                </select>
	                <br>

                <input class="btn btn-default" type="Submit" name="prestasi"></input>
            </form>

        </div>
    </main>

		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
    
    <?php
        include "footer.php";
    ?>
    

</body>

</html>