<?php
  include_once "header.php";

  class Database{

      // get the database connection
      public function getConnection(){
          // specify your own database credentials
          $host = "localhost";
          $db_name = "siforkomlab";
          $username = "root";
          $password = "";
          $conn;

          // Create connection
          $conn = new mysqli($host, $username, $password, $db_name);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          return $conn;
      }
  }
?>
