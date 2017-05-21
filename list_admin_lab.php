<?php
  include 'header.php';
  include 'navbar.php';
  include 'config/database.php';

  $database = new Database();
  $db = $database->getConnection();

    //if(isset($_SESSION["id"])){
      $nama_tabel = "anggota_lab";
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
              <h1>Daftar Administrator Laboratorium</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
          <?php
                  echo "<table class='display dataTable' style='width:70%; text-align: center'>";
                  $cnt = $res->num_rows;
                  if($cnt>0){

                    echo "<thead><tr>
                              <th style='text-align: center;'>Id anggota</th>
                              <th style='text-align: center;'>Nama admin</th>
                              <th style='text-align: center;'>Jabatan</th>
                              <th style='text-align: center;'>Ubah</th>
                            </tr>
                          </thead>
                         <tbody>";


                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                      $id = $row['id_anggota_lab'];

                      echo "<tr>";
                      echo "<td>".$row["id_anggota_lab"]."</td>";
                      echo "<td>".$row["nama_anggota_lab"]."</td>";
                      echo "<td>".$row["jabatan_anggota_lab"]."</td>";
                      echo "<td><a href='detail-item.php?id=".$id."&act=admin_lab' class='btn btn-default'>Lihat detail</a>";
                      echo "<a href='delete-item.php?id=".$id."&act=admin_lab' class='btn btn-danger'>Hapus</a></td>";
                      echo "</tr>";

                      echo "</tbody>";
                    }
                    echo "</table>";
                  }
                  else {
                    echo "<center>";
                    echo "<h1>Tidak ada user</h1>";
                    echo "<center>";
                  }
                 ?>
        </table>
      </div>



      </div>
</div>

</main>
</body>

<?php
  include 'footer.php';
 ?>
009601001
968305
