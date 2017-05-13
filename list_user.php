<?php
  include 'header.php';
  include 'navbar.php';
  include 'config/database.php';

  $database = new Database();
  $db = $database->getConnection();

    //if(isset($_SESSION["id"])){
      $nama_tabel = "user";
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
              <h1>Daftar User Laboratorium</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
        <table class="display dataTable" style="width:70%; text-align: center">
          <thead>
                  <tr>
                    <th>Id user</th>
                    <th>Nama user</th>
                    <th style="text-align: center;">Ubah</th>
                  </tr>
                </thead>
               <tbody>
                <?php
                  $cnt = $res->num_rows;
                  if($cnt>0){
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                      $id = $row['id_user'];

                      echo "<tr>";
                      echo "<td>".$row["id_user"]."</td>";
                      echo "<td>".$row["nama_user"]."</td>";
                      echo "<td><a href='detail-item.php?id=".$id."&act=user' class='btn btn-default'>Lihat detail</a>";
                      echo "<a href='delete-item.php?id=".$id."&act=user' class='btn btn-danger'>Hapus</a></td>";
                      echo "</tr>";
                    }
                  }
                  else {
                    echo "<h1>Tidak ada user</h1>";
                  }
                 ?>
                  <tr>
                    <td>1</td>
                    <td>Cahya S</td>
                    <td><a href="detail_user.php" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Irzal D</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Habib W</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Kukuh S</td>
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
