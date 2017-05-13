<?php
include 'header.php';
include 'config/database.php';

$database = new Database();
$db = $database->getConnection();

  //6. karena tadi submitnya pake nama "srn", jadi if dibawah yang dikerjakan
  if(isset($_POST["srn"])){

    //7. inisasi, supaya gampang kalo mau diedit
    $nama_tabel = "saran";
    //8. isi sesuai "name = " tadi
    $isi_saran = ($_POST["saran"]);
    $id_lab = ($_POST['lab']);
    //9. ini contoh, nanti pake $_SESSION
    $user = 1;

    //10. ini bagian ngerjakan sqlnya, sesuaikan dengan tabel yang dipilih
    $sql = "INSERT INTO `$nama_tabel`(`id_user`, `id_lab`, `isi_saran`) VALUES ('$user','$id_lab','$isi_saran')";
    $res =	$db->query($sql);
  }

  //kerjakan aja disini
  elseif(isset($_POST["???"])){

    //inisasi, supaya gampang kalo mau diedit

    //ini bagian ngerjakan sqlnya, sesuaikan dengan tabel yang dipilih
    $sql = "???";
    $res =	$db->query($sql);
  }

?>
<div class="container" style="margin-top:10%;">
  <?php
    if($res){
      echo "<h1>Data berhasil masuk</h1>";
    }
    else{
      echo "<h1>Data gagal masuk</h1>";
      printf("Mysql error: %s",$db->error);
    }

    mysqli_close($db);
    //11. Kalo udah kerjakan halaman lain
  ?>
</div>
