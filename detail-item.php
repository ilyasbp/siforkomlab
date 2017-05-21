<?php
	include 'header.php';
	//include 'navbar.php';
	include 'config/database.php';

	$database = new Database();
	$db = $database->getConnection();

	$act = $_GET['act'];
	$id = $_GET['id'];

	?>
	<main class="pt-6 text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
	<?php

	if($act == "saran"){

		$sql = "SELECT isi_saran FROM saran where id_saran = '$id'";
		$sql1 = "SELECT nama_user from user u, saran s where s.id_user = u.id_user and s.id_saran = '$id'";
		$res = $db->query($sql);
		$isi = $res->fetch_array(MYSQLI_NUM);
		$res1 = $db->query($sql1);
		$sender = $res1->fetch_array(MYSQLI_NUM);

		echo "<h1>Saran dari : ";
		echo $sender[0]."</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Isi saran: </h2>";
		echo "<p>".$isi[0]."</p>";
	}
	elseif($act=="prestasi"){
		$sql = "SELECT * FROM prestasi where id_pres = '$id'";
		$sql1 = "SELECT nama_lab from laboratorium l, prestasi p where l.id_lab = p.id_pres and p.id_pres = '$id'";
		$res = $db->query($sql);
		$isi = $res->fetch_array(MYSQLI_NUM);
		$res1 = $db->query($sql1);
		$sender = $res1->fetch_array(MYSQLI_NUM);

		echo "<h1>Prestasi kejuaraan : ";
		echo $isi[3]."</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Nama : ".$isi[1]."</h2><br>";
		echo "<h2>NRP : ".$isi[2]."</h2><br>";
		echo "<h2>Pelaksanaan : ".date("D-M-Y", $isi[4])."</h2><br>";
		echo "<h2>Peringkat : ".$isi[5]."</h2><br>";
		echo "<h2>Dari laboratorium : ".$sender[0]."</h2><br>";
	}
	elseif ($act=="reserv") {
		$sql = "SELECT * FROM reservasi where id_reserv = '$id'";
		$sql1 = "SELECT nama_lab from laboratorium l, reservasi r where l.id_lab = r.id_lab and r.id_reserv = '$id'";
		$res = $db->query($sql);
		$isi = $res->fetch_array(MYSQLI_NUM);
		$res1 = $db->query($sql1);
		$sender = $res1->fetch_array(MYSQLI_NUM);

		echo "<h1>Detail Reservasi :</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Waktu : ".date("D-M-Y H:m:s", $isi[1])."</h2><br>";
		echo "<h2>Nama Penanggung jawab : ".$isi[2]."</h2><br>";
		echo "<h2>No Telp : ".$isi[3]."</h2><br>";
		echo "<h2>NRP : ".$isi[4]."</h2><br>";
		echo "<h2>Keperluan : ".$isi[5]."</h2><br>";
		echo "<h2>Untuk Lab : ".$sender[0]."</h2><br>";
	}
	elseif ($act=="admin_lab") {
		$sql = "SELECT * FROM anggota_lab where id_anggota_lab = '$id'";
		$sql1 = "SELECT nama_lab from laboratorium l, anggota_lab a where l.id_lab = r.id_lab and r.id_anggota_lab = '$id'";
		$res = $db->query($sql);
		$isi = $res->fetch_array(MYSQLI_NUM);
		$res1 = $db->query($sql1);
		$sender = $res1->fetch_array(MYSQLI_NUM);

		echo "<h1>Detail Anggota Lab :".$sender[0]."</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Nama Lengkap : ".$isi[3]."</h2><br>";
		echo "<h2>Jabatan : ".$isi[2]."</h2><br>";
		echo "<h2>Email : ".$isi[4]."</h2><br>";
		echo "<h2>Judul Riset : ".$isi[5]."</h2><br>";
	}

 ?>


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
	include 'footer.php';
 ?>
