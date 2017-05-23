<?php
  $page_title="List Agenda Laboratorium";
  include 'header.php';
  include 'navbar.php';
  include 'config/database.php';

  $id = $_GET['id'];

  $database = new Database();
  $db = $database->getConnection();

#      $_SESSION['id_lab'] = 1;
//      $id_lab_temp = 1;
      $sql = "SELECT * FROM reservasi WHERE id_lab = ?";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(1, $id);
      $stmt->execute();

    #  $res = $stmt->fetch(PDO::FETCH_NUM);
?>
<main class="pt-6 text-center" style="min-height:100%">
  <div class="container">
    <div class="container">
      <div class="row">
          <div class="col text-center">
              <h1>Daftar Agenda Laboratorium</h1>
          </div>
      </div>
<?php

    echo "<table class='display dataTable' style='width:100%; text-align: center'>";
    $cnt = $stmt->rowCount();
    if($cnt>0){

      echo "<thead><tr>
                <th style='text-align: center;'>Id Reservasi</th>
                <th style='text-align: center;'>Hari & jam</th>
                <th style='text-align: center;'>Keperluan</th>
              </tr>
            </thead>
           <tbody>";


      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        echo "<tr>";
        echo "<td>".$row["id_reserv"]."</td>";
        echo "<td>".$row["haritgl"]."</td>";
        echo "<td>".$row["keperluan"]."</td>";
        echo "</tr>";

        echo "</tbody>";
      }
      echo "</table>";
    }
    else {
      echo "<br>";
      echo "<br>";
      echo "<div class='col text-center'>
      <h1>Tidak ada User</h1>
      </div>";
    }

?>
</div>
</div>
</main>

<?php
  include "footer.php";
 ?>
