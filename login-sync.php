<?php  
    // Lampirkan db dan User
    include_once "config/database.php";
    include_once "object/admin.php";

    // get database connection
    $database = new Database();
    $db = $database->getConnection();

    // Buat object user
    $admin = new Admin($db);

    // Jika belum login
    if(!$admin->isLoggedIn()){
        header("location: login.php"); //Redirect ke halaman login
    }

    // Ambil data admin saat ini
    $currentAdmin = $admin->getAdminName();

 ?>