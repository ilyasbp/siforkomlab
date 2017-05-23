<?php
//ikuti penomorannya buat instruksi
//1. cari <form>
    $page_title="Saran";
	include 'header.php';
	include 'navbar.php';
 ?>
	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Saran untuk Laboratorium</h1>
                </div>
            </div>
            <hr>

						<!--2. isi methodnya ='post' action insert-data.php, perhatikan variabel "name = ", nantinya itu yang bakal di passing -->
            <form method="post" action="insert-data.php">
								<h3>
									Nama User:
								</h3>
								<input type="text" name="nama_user">
								<br>
								<br>
								<br>
								
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


                                    
                                    echo '<label for="lab">Pilih salah satu:</label>';
                                    echo '<select name="lab" class="form-control">';
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
                    Isi Saran :
                </h3>
                <div class="form-group" >
                    <label for="saran"></label>
                    <textarea class="form-control" rows="5" name="saran" style="height: 50%"></textarea>
                </div>
                <br>
                <br>
                <br>
								<!--3. ubah submitnya jadi kaya yang dibawah trus name isi bebas, yang penting ngga sama seperti halaman lain-->
                <input class="btn btn-default" type="Submit" name="srn"></input>
								<!-- 4. submit yang masih pake <a href dll> hapus aja -->
								<!-- 5. ganti ngerjakan halaman insert-data.php -->
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
    
    <?php
        include "footer.php";
    ?>
    
</body>

</html>