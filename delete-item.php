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

		$sql = "DELETE FROM saran where id_saran = '$id'";
		$res = $db->query($sql);

    header("location: list_saran.php");
	}
	elseif($act=="prestasi"){
    $sql = "DELETE FROM prestasi where id_pres = '$id'";
		$res = $db->query($sql);

    header("location: list_prestasi.php");

	}
	elseif ($act=="reserv") {
    $sql = "DELETE FROM reservasi where id_reserv = '$id'";
		$res = $db->query($sql);

    header("location: list_agenda.php");
	}
	elseif ($act=="admin_lab") {
    $sql = "DELETE FROM admin_lab where id_admin_lab = ?";
		$stmt = $db->prepare( $sql );
		$stmt->bindParam(1, $id);
		$stmt->execute();

    header("location: list_admin_lab.php");
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
