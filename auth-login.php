<?php
  	$page_title = "Login";

	include_once 'header.php';
	include_once 'config/database.php';
	include_once 'object/player.php';

	$database = new Database();
	$db = $database->getConnection();

	$player = new Player($db);

	session_start();
	if($_POST){

     	$myusername = isset($_POST['user']);

     	$sql = "SELECT 0 from admin_lab where username_admin_lab = ? and password_admin_lab = ?";
     	$result = $db->prepare($sql);
     	$result->bindParam(1, $_POST['user']);
     	$result->bindParam(2, $_POST['pass']);


     	$row = $result->setFetchMode(PDO::FETCH_ASSOC);
     	$result->execute();
     	$values = $result->fetch();
      	$active = $row['active'];

     	extract($values);
     	if($values['@stats']=='-1'){
         	$_SESSION['login_user'] = $myusername;

         	header("location: dasbor_admin.php");
     	}
     	else{
     		$error = "Password atau username salah";
     	}
    }
?>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

<?php
	include_once 'footer.php'
?>
