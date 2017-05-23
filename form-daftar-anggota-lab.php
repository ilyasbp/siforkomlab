<?php
    $page_title="Pendaftaran Anggota Lab";
	include 'header.php';
	include 'navbar2.php';

    include 'object/anggota_lab.php';
    include 'config/database.php';

    $database = new Database();
    $db = $database->getConnection();

    // Buat object user
    $anggotaLab = new AnggotaLab($db);

    //Jika ada data dikirim
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $email = $_POST['email'];
        $riset = $_POST['riset'];
        $id_lab = $_POST['id_lab'];

        // Registrasi admin baru
        if($anggotaLab->register($id_lab, $jabatan, $nama, $email, $riset)){
            // Jika berhasil set variable success ke true
            $success = true;
        }else{
            // Jika gagal, ambil pesan error
            $failed = true;
            $error = $anggotaLab->getLastError();
        }
    }
 ?>

	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Daftar user baru</h1>
                </div>
            </div>
            <hr>
            <form method="post">
            <?php
                                if(isset($success)){
                                    echo '<div class="alert alert-success alert-dismissable">';
                                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                    echo "Berhasil menambah Anggota Lab dengan nama $nama";
                                    echo "</div>";
                                }
                                if(isset($failed)){
                                    echo '<div class="alert alert-danger alert-dismissable">';
                                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                    echo 'Unable to create product.';
                                    echo 'error: $error';
                                    echo '</div>';
                                }
                            ?>
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
								
                <button type="submit" name="kirim" class="btn btn-deep-purple">Register</button>
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