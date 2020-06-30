<?php
ob_start();
session_start();


try {
     $db = new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8","root", "");
     //echo 	"basarılı";
} catch ( PDOException $e ){
     print $e->getMessage();
     exit;
}

$Ayar=$db->query("SELECT * FROM ayar")->fetch();


//print_r($_SERVER);

if(strpos($_SERVER['SCRIPT_NAME'], "yonet/") && substr($_SERVER['SCRIPT_NAME'], -9)!="login.php" && substr($_SERVER['SCRIPT_NAME'], -17)!="login_kontrol.php")

{
	if(!isset($_SESSION['kullanici_id']))
	{
		header("Location:login.php");
		exit();
	}

}

?>