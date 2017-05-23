<?php
    $page_title="Insert";
include 'header.php';
include 'navbar2.php';
include 'config/database.php';

$database = new Database();
$db = $database->getConnection();

  //6. karena tadi submitnya pake nama "srn", jadi if dibawah yang dikerjakan
  if(isset($_POST["srn"])){

    //7. inisasi, supaya gampang kalo mau diedit
    $nama_tabel = "saran";
    //8. isi sesuai "name = " tadi
    $isi_saran = ($_POST['saran']);
    $id_lab = ($_POST['lab']);
    //9. ini contoh, nanti pake $_SESSION
    $user = 1;

    //10. ini bagian ngerjakan sqlnya, sesuaikan dengan tabel yang dipilih
    $sql = "INSERT INTO `$nama_tabel`(`id_user`, `id_lab`, `isi_saran`) VALUES ('$user','$id_lab','$isi_saran')";
    $res =	$db->query($sql);
  }

  //kerjakan aja disini
  elseif(isset($_POST["rsrv"])){

    //inisasi, supaya gampang kalo mau diedit
    //7. inisasi, supaya gampang kalo mau diedit
    $nama_tabel = "reservasi";
    //8. isi sesuai "name = " tadi
    $id_lab = ($_POST['lab']);
    $haritgl = ($_POST['tanggal']);
    $nama_pj = ($_POST['nama']);
    $nrp = ($_POST['nrp']);
    $telp = ($_POST['notelp']);
    $keperluan = ($_POST['penting']);
    
    //9. ini contoh, nanti pake $_SESSION
    $user = 1;
    //ini bagian ngerjakan sqlnya, sesuaikan dengan tabel yang dipilih
    $sql = "INSERT INTO reservasi (id_lab, haritgl, nama_pj, nrp, telp, keperluan) VALUES ('$id_lab', '$haritgl', '$nama_pj', '$nrp', '$telp', '$keperluan')";
    $res =	$db->query($sql);
  }

  elseif(isset($_POST["daftar_user"])){

    //inisasi, supaya gampang kalo mau diedit
    //7. inisasi, supaya gampang kalo mau diedit
    $nama_tabel = "user";
    //8. isi sesuai "name = " tadi
    $nama_user = ($_POST['nama']);
    $nrp_user = ($_POST['nrp']);
    $id_lab = ($_POST['lab']);

    
    //9. ini contoh, nanti pake $_SESSION
    $user = 1;
    //ini bagian ngerjakan sqlnya, sesuaikan dengan tabel yang dipilih
    $sql = "INSERT INTO user (nama_user, nrp_user, lab) VALUES ('$nama_user', '$nrp_user', '$lab')";
    $res =  $db->query($sql);
  }
  elseif(isset($_POST["prestasi"])){

    //inisasi, supaya gampang kalo mau diedit
    //7. inisasi, supaya gampang kalo mau diedit
    $nama_tabel = "prestasi";
    //8. isi sesuai "name = " tadi
    $nama = ($_POST['nama']);
    $nrp = ($_POST['nrp']);
    $lomba = ($_POST['juara']);
    $haritgl = ($_POST['haritgl']);
    $peringkat = ($_POST['peringkat']);
    $sertif = ($_POST['piagam']);
    $id_lab = ($_POST['lab']);
        
    //9. ini contoh, nanti pake $_SESSION
    $user = 1;
    //ini bagian ngerjakan sqlnya, sesuaikan dengan tabel yang dipilih
    $sql = "INSERT INTO prestasi (nama, nrp, lomba, haritgl, peringkat, sertif, id_lab) VALUES ('$nama', '$nrp', '$lomba', '$haritgl', '$peringkat', '$sertif', '$id_lab')";
    $res =  $db->query($sql);
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

//    mysqli_close($db);
    //11. Kalo udah kerjakan halaman lain
  ?>
</div>
