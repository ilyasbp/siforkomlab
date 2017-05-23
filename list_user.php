<?php
$page_title="List User Laboratorium";
include 'header.php';
include 'navbar2.php';
include 'config/database.php';

$database = new Database();
$db = $database->getConnection();

    //if(isset($_SESSION["id"])){
$nama_tabel = "user";
#      $_SESSION['id_lab'] = 1;
$id_lab_temp = 4;
$sql = "SELECT * FROM ".$nama_tabel."";
$res = $db->prepare( $sql );
//      $res->bindParam(":id_lab_temp", $id_lab_temp);
//      $res->bindParam(":nama_table", $nama_table);
$res->execute();
    //}

?>
<body>

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
                <th style="text-align: center;">Id user</th>
                <th style="text-align: center;">Nama user</th>
                <th style="text-align: center;">NRP user</th>
                <th style="text-align: center;">Ubah</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $cnt = $res->rowCount();
              if($cnt>0){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                  $id = $row['id_user'];

                  echo "<tr>";
                  echo "<td>".$row["id_user"]."</td>";
                  echo "<td>".$row["nama_user"]."</td>";
                  echo "<td>".$row["nrp_user"]."</td>";
                  echo "<td><a href='detail-item.php?id=".$id."&act=user' class='btn btn-default'>Lihat detail</a>";
                  echo "<a href='delete-item.php?id=".$id."&act=user' class='btn btn-danger'>Hapus</a></td>";
                  echo "</tr>";
                }
              }
              else {
                echo "<h1>Tidak ada user</h1>";
              }
              ?>
            </tbody>
          </table>
        </div>



      </div>
    </div>

  </main>


  <?php
  include "footer.php";
  ?>
</body>