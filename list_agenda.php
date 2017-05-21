<?php
  include 'header.php';
  include 'navbar.php';
  include 'config/database.php';

  $database = new Database();
  $db = $database->getConnection();

    //if(isset($_SESSION["id"])){
      $nama_tabel = "reservasi";
#      $_SESSION['id_lab'] = 1;
      $id_lab_temp = 1;
      $sql = "SELECT * FROM `$nama_tabel` WHERE id_lab = '$id_lab_temp'";
      $res = $db->query($sql);

    //}
?>

<main class="pt-6 text-center">
  <div class="container">
    <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1>Daftar Agenda Laboratorium</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
        <table class="display dataTable" style="width:70%; text-align: center">
          <thead>
                  <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Nama agenda</th>
                    <th style="text-align: center;">Waktu pelaksanaan</th>
                    <th style="text-align: center;">Ubah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $cnt = $res->num_rows;
                    if($cnt>0){
                      while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $id = $row['id_reserv'];

                        echo "<tr>";
                        echo "<td>".$row["id_reserv"]."</td>";
                        echo "<td>".$row["keperluan"]."</td>";
                        echo "<td>".date("D, d M y H:i:s O", strtotime($row["haritgl"]))."</td>";
                        echo "<td><a href='detail-item.php?id=".$id."&act=reserv' class='btn btn-default'>Lihat detail</a>";
                        echo "<a href='delete-item.php?id=".$id."&act=reserv' class='btn btn-danger'>Hapus</a></td>";
                        echo "</tr>";
                      }
                    }
                    else {
                      echo "<h1>Tidak ada agenda</h1>";
                    }
                   ?>
                  <tr>
                    <td>1</td>
                    <td>Bimbingan TA</td>
                    <td>5 Mei 2017, 13.00</td>

                    <td><a href="detail_agenda.php" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>LBE</td>
                    <td>5 Mei 2017, 18.00</td>

                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Rapat Admin</td>
                    <td>10 Mei 2017, 14.30</td>

                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Maintenance</td>
                    <td>25 Mei 2017, 7.00</td>

                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                </tbody>
        </table>
      </div>



      </div>
</div>

</main>
</body>

<?php
  include 'footer.php';
 ?>
