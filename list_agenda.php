<?php
    $page_title="List Agenda Laboratorium";
  include 'header.php';
  include 'navbar2.php';
  include 'config/database.php';

  $database = new Database();
  $db = $database->getConnection();

    //if(isset($_SESSION["id"])){
      $nama_tabel = "reservasi";
#      $_SESSION['id_lab'] = 1;
      $id_lab_temp = 6;
      $sql = "SELECT * FROM ".$nama_tabel." WHERE id_lab = :id_lab_temp";
      $res = $db->prepare( $sql );
      $res->bindParam(":id_lab_temp", $id_lab_temp);
//      $res->bindParam(":nama_tabel", $nama_tabel);
      $res->execute();
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
                    $cnt = $res->rowCount();
                    if($cnt>0){
                      while($row = $res->fetch(PDO::FETCH_ASSOC)){
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
                  </tr>
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