<?php
$page_title="Pendaftaran User";
include 'header.php';
include 'navbar2.php';

include 'object/user.php';
include 'config/database.php';

$database = new Database();
$db = $database->getConnection();

    // Buat object user
$user = new User($db);

    //Jika ada data dikirim
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];

        // Registrasi admin baru
    if($user->register($nama, $nrp)){
            // Jika berhasil set variable success ke true
        $success = true;
    }else{
            // Jika gagal, ambil pesan error
        $failed = true;
        $error = $user->getLastError();
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
        <br>
        <br>
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
        <form method="post">
            <h3>
                Nama lengkap:
            </h3>
            <input type="text" name="nama">
            <br>
            <br>
            <br>
            <br>
            <h3>
                NRP:
            </h3>
            <input type="number" name="nrp">
            <br>
            <br>
            <br>
            

            <button type="submit" name="kirim" class="btn btn-deep-purple">Register</button>
            <br>
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