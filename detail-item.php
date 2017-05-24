<?php
    $page_title="Detail";
	include 'header.php';
	include 'navbar2.php';
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

		$sql = "SELECT isi_saran FROM saran where id_saran = :id";
		$sql1 = "SELECT nama_user from user u, saran s where u.id_user = s.id_user and s.id_user = :id";
		$res = $db->prepare($sql);
		$res->bindParam(":id", $id);
		$res->execute();
		$isi = $res->fetch(PDO::FETCH_NUM);
		$res1 = $db->prepare($sql);
		$res1->bindParam(":id", $id);
		$res1->execute();
		$sender = $res1->fetch(PDO::FETCH_NUM);

		echo "<h1>Saran dari : ".$sender[0]."</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Isi saran: </h2>";
		echo "<p>".$isi[0]."</p>";
	}
	elseif($act=="prestasi"){
		$sql = "SELECT * FROM prestasi where id_pres = '$id'";
		$sql1 = "SELECT nama_lab from laboratorium l, prestasi p where l.id_lab = p.id_pres and p.id_pres = '$id'";
		$res = $db->prepare($sql);
		$res->bindParam(1, $id);
		$res->execute();
		$isi = $res->fetch(PDO::FETCH_NUM);
		$res1 = $db->prepare($sql);
		$res1->bindParam(1, $id);
		$res1->execute();
		$sender = $res1->fetch(PDO::FETCH_NUM);

		echo "<h1>Prestasi kejuaraan : ";
		echo $isi[3]."</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Nama : ".$isi[1]."</h2><br>";
		echo "<h2>NRP : ".$isi[2]."</h2><br>";
		echo "<h2>Pelaksanaan : ".date("d-M-Y", strtotime(str_replace('-','/', $isi[4])))."</h2><br>";
		echo "<h2>Peringkat : ".$isi[5]."</h2><br>";
		echo "<h2>Dari laboratorium : ".$sender[2]."</h2><br>";
	}
	elseif ($act=="reserv") {
		$sql = "SELECT * FROM reservasi where id_reserv = '$id'";
		$sql1 = "SELECT nama_lab from laboratorium l, reservasi r where l.id_lab = r.id_lab and r.id_reserv = '$id'";
		$res = $db->prepare($sql);
		$res->bindParam(1, $id);
		$res->execute();
		$isi = $res->fetch(PDO::FETCH_NUM);
		$res1 = $db->prepare($sql);
		$res1->bindParam(1, $id);
		$res1->execute();
		$sender = $res1->fetch(PDO::FETCH_NUM);

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
		$sql = "SELECT * FROM admin_lab where id_admin_lab = ?";
		$sql1 = "SELECT l.nama_lab from laboratorium l, admin_lab a where l.id_lab = r.id_lab and r.id_admin_lab = ?";
		$res = $db->prepare($sql);
		$res->bindParam(1, $id);
		$res->execute();
		$isi = $res->fetch(PDO::FETCH_NUM);
		$res1 = $db->prepare($sql);
		$res1->bindParam(1, $id);
		$res1->execute();
		$sender = $res1->fetch(PDO::FETCH_NUM);

		echo "<h1>Detail Admin Lab :".$sender[0]."</h1>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>Nama Lengkap : ".$isi[3]."</h2><br>";
		echo "<h2>Nomor Telepon : ".$isi[4]."</h2><br>";
		echo "<h2>Alamat : ".$isi[5]."</h2><br>";
		echo "<h2>Email : ".$isi[6]."</h2><br>";
	}
	elseif ($act=="user") {
		$sql = "SELECT * FROM user where id_user = ?";
		$res = $db->prepare($sql);
		$res->bindParam(1, $id);
		$res->execute();
		$isi = $res->fetch(PDO::FETCH_ASSOC);

		echo "<h1>Detail user Lab : </h1>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h2>Nama User:".$isi['nama_user']." </h>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
		echo "<h2>NRP : ".$isi['nrp_user']."</h2><br>";
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


    <?php
        include "footer.php";
    ?>


</body>

</html>
