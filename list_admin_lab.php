<?php
  $page_title="List Admin Laboratorium";
  include 'header.php';
  include 'navbar2.php';
  include 'config/database.php';

  $database = new Database();
  $db = $database->getConnection();

    //if(isset($_SESSION["id"])){
      $nama_tabel = "admin_lab";
#      $_SESSION['id_lab'] = 1;
      $id_lab_temp = 3;
      $sql = "SELECT * FROM admin_lab WHERE id_lab = :id_lab_temp";

      $stmt = $db->prepare( $sql );
      $stmt->bindParam(":id_lab_temp", $id_lab_temp);
      $stmt->execute();

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
                  $cnt = $stmt->rowCount();
                  if($cnt>0){

                    echo "<thead><tr>
                              <th style='text-align: center;'>Id Admin</th>
                              <th style='text-align: center;'>Nama Admin</th>
                              <th style='text-align: center;'>No Telepon</th>
                              <th style='text-align: center;'>Alamat</th>
                              <th style='text-align: center;'>Edit</th>
                            </tr>
                          </thead>
                         <tbody>";


                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                      $id = $row['id_admin_lab'];

                      echo "<tr>";
                      echo "<td>".$row["id_admin_lab"]."</td>";
                      echo "<td>".$row["nama_admin_lab"]."</td>";
                      echo "<td>".$row["no_telepon_admin_lab"]."</td>";
                      echo "<td>".$row["alamat_admin_lab"]."</td>";
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

    
    <?php
        include "footer.php";
    ?>
    
</main>
</body>
