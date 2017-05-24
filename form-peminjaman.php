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
               
                  <?php
                                    include_once 'config/database.php';
                                    include_once 'object/lab.php';

                                    // get database connection
                                    $database = new Database();
                                    $db = $database->getConnection();

                                    $lab = new Lab($db);
                                    $stmt = $lab->read();


                                    
                                    echo '<label for="id_lab">Pilih salah satu:</label>';
                                    echo '<select name="id_lab" class="form-control">';
                                    echo '<option value="" disabled selected>Laboratorium</option>';

                                    while ($row_lab = $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        extract($row_lab);
                                        echo '<option value="'.$id_lab.'">'.$nama_lab.'</option>';
                                    }

                                    echo '</select>';
                                ?>
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
