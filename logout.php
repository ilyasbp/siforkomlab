<?php  
    // Lampirkan db dan User
    include_once "config/database.php";
    include_once "object/admin.php";

    // Buat object user
    $admin = new Admin($db);

    // Logout! hapus session user
    $admin->logout();

    // Redirect ke login
    header('location: login.php');
 ?>