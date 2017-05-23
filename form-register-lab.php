<?php
    $page_title="Penambahan Lab";
	include_once "config/database.php";
    include_once "object/lab.php";

    // get database connection
	$database = new Database();
	$db = $database->getConnection();

	// Buat object user
    $lab = new Lab($db);

	include_once 'header.php';
	include_once 'navbar.php';

    //Jika ada data dikirim
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $website = $_POST['website'];

        // Registrasi lab baru
        if($lab->register($nama, $website)){
            // Jika berhasil set variable success ke true
            $success = true;
        }else{
            // Jika gagal, ambil pesan error
            $error = $lab->getLastError();
        }
    }
?>

<main class="pt-6">
		<div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>LABORATORIUM REGISTRATION</h1>
                </div>
            </div>
            <hr>

            <div class="row">
			    <div class="col-md-4"> </div>
			    <div class="col-md-4">
			    	<!--Naked Form-->
			    		<br>
			    		<form class="register-form" method="post">
						   	
						    <div class="md-form">
						        <i class="fa fa-users prefix"></i>
						        <input type="text" id="formNama" class="form-control" name="nama">
						        <label for="formNama">Nama Lab</label>
						    </div>
						    <div class="md-form">
						        <i class="fa fa-globe prefix"></i>
						        <input type="text" id="formWebsite" class="form-control" name="website">
						        <label for="formWebsite">Website</label>

						    <div class="text-center">
						        <button type="submit" name="kirim" class="btn btn-deep-purple">Register</button>
						    </div>
						</form>
					<!--Naked Form-->
			    </div>
			    <div class="col-md-4"> </div>
			</div>
        </div>
        <?php
          include_once 'footer.php';
         ?>
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