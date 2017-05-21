<?php
    include_once "config/database.php";
    include_once "object/admin.php";
    include_once "object/lab.php";

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    // Buat object user
    $admin = new Admin($db);

    include_once 'header.php';
    include_once 'navbar2.php';

    //Jika ada data dikirim
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $nope = $_POST['nope'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_lab = $_POST['id_lab'];

        // Registrasi admin baru
        if($admin->register($nama, $nope, $alamat, $email, $username, $password, $id_lab)){
            // Jika berhasil set variable success ke true
            $success = true;
        }else{
            // Jika gagal, ambil pesan error
            $error = $admin->getLastError();
        }
    }
?>

<main class="pt-6">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>ADMININISTRATOR REGISTRATION</h1>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-3"> </div>
                <div class="col-md-6">
                    <!--Naked Form-->
                        <br>
                        <form class="register-form" method="post">
                            <?php if (isset($error)): ?>
                                <div class="error">
                                    <?php echo $error ?>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($success)): ?>
                                <div class="success">
                                    Berhasil mendaftar. Silakan <a href="login.php">masuk</a>
                                </div>
                            <?php endif; ?>
                                
                                <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="formNama" class="form-control" name="nama">
                                <label for="formNama">Nama Lengkap</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-phone-square prefix"></i>
                                <input type="text" id="formNope" class="form-control" name="nope">
                                <label for="formNope">Nomor Telepon</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-home prefix"></i>
                                <input type="text" id="formAlamat" class="form-control" name="alamat">
                                <label for="formAlamat">Alamat</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="formEmail" class="form-control" name="email">
                                <label for="formEmail">Email</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="formUsername" class="form-control" name="username">
                                <label for="formUsername">Username</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form4" class="form-control" name="password">
                                <label for="form4">Password</label>
                            </div>


                            <div>
                                <?php
                                    $lab = new Lab($db);
                                    $stmt = $lab->read();

                                    echo '<select name="id_lab" class="form-control">';
                                    echo '<option value="" disabled selected>Laboratorium</option>';

                                    while ($row_lab = $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        extract($row_lab);
                                        echo '<option value="'.$id_lab.'">'.$nama_lab.'</option>';
                                    }

                                    echo '</select>';
                                ?>
                            </div>
                            <div class="text-center">
                                <p>Dengan ini menyetujui aturan dan syarat untuk menjadi anggota ForkomLAB Teknik Informatika ITS</p>
                                <label class="btn btn-primary active">
                                <input type="checkbox" class="checkbox" name="setuju" checked autocomplete="off"> Saya setuju
                                </label>
                            </div>
                            

                            <div class="text-center">
                                <button type="submit" name="kirim" class="btn btn-deep-purple">Register</button>
                            </div>
                        </form>
                    <!--Naked Form-->
                </div>
                <div class="col-md-3"> </div>
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
</body>