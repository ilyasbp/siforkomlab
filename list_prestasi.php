<?php
    $page_title="List Prestasi Laboratorium";
  include 'header.php';
  include 'navbar2.php';
  include 'config/database.php';

  $database = new Database();
  $db = $database->getConnection();

    //if(isset($_SESSION["id"])){
      $nama_tabel = "prestasi";
#      $_SESSION['id_lab'] = 1;
      $id_lab_temp = 3;
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
              <h1>Daftar Prestasi Laboratorium</h1>
          </div>
      </div>

      <div class="row" style="text-align: -webkit-center">
                  <?php

                        echo "<table class='display dataTable' style='width:70%; text-align: center'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th style='text-align: center;'>ID</th>";
                        echo "<th style='text-align: center;'>Nama</th>";
                        echo "<th style='text-align: center;'>NRP</th>";
                        echo "<th style='text-align: center;'>Kejuaraan</th>";
                        echo "<th style='text-align: center;'>Peringkat</th>";
                        echo "<th style='text-align: center;'>Ubah</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                    $cnt = $res->rowCount();
                    if($cnt>0){
                      while($row = $res->fetch(PDO::FETCH_ASSOC)){
                        $id = $row['id_pres'];

                        echo "<tr>";
                        echo "<td>".$row["id_pres"]."</td>";
                        echo "<td>".$row["nama"]."</td>";
                        echo "<td>".$row["nrp"]."</td>";
                        echo "<td>".$row["lomba"]."</td>";
                        echo "<td>".$row["peringkat"]."</td>";
                        echo "<td><a href='detail-item.php?id=".$id."&act=prestasi' class='btn btn-default'>Lihat detail</a>";
                        echo "<a href='delete-item.php?id=".$id."&act=prestasi' class='btn btn-danger'>Hapus</a></td>";
                        echo "</tr>";
                        echo "</tr>";
                        echo "</tbody>";
                      }
                    }
                    else {
                      echo "<br>";
                      echo "<br>";
                      echo "<div class='col text-center'>
                      <h1>Tidak ada Prestasi</h1>
                      </div>";
                    }
                    
                        echo "</table>";
                   ?>
                   <!--
                  <tr>
                    <td>1</td>
                    <td>Ilyas B</td>
                    <td>511012256</td>
                    <td>Hackathon</td>
                    <td>Juara Harapan 1</td>
                    <td><a href="detail-item.php?id=1&act=prestasi" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>R.Ay. Noormala Nadya</td>
                    <td>5114100127</td>
                    <td>Indie Game</td>
                    <td>Juara 1</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>A. Galang Anugerah</td>
                    <td>5112100157</td>
                    <td>TCode</td>
                    <td>Juara 2</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Kukuh Rilo</td>
                    <td>5113100178</td>
                    <td>Capture Flag</td>
                    <td>Juara 2</td>
                    <td><a href="" class="btn btn-default">Lihat detail</a>
                    <a href="" class="btn btn-default">Hapus</a>
                    </td>
                  </tr>
                </tbody>
        </table>-->
      </div>



      </div>
</div>

</main>

    <?php
        include "footer.php";
    ?>

</body>
