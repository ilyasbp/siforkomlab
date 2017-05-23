<?php
    $page_title="Reservasi Lab";
	include 'header.php';
	include 'navbar2.php';
 ?>
 
	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Reservasi Laboratorium</h1>
                </div>
            </div>
            <hr>
            <form method="post" action="insert-data.php">
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

                <h3>
                    Hari dan Tanggal :
                </h3>

					<input type="date" class="datepicker" name="tanggal">
					<br>
					<br>
					<br>
					<h3>
	                    Nama Penanggung Jawab :
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
                        No. Telepon :
                    </h3>
                    <input type="text" name="notelp">
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

                <input class="btn btn-default" type="Submit" name="rsrv"></input>
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
