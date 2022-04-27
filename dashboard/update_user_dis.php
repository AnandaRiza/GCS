<?php 
include('../includes/config.php');

if(isset($_REQUEST['pkgid']))
	{
$pid=intval($_GET['pkgid']);


$sqlz="UPDATE user SET  subsidies_status = 'Not Approved' WHERE user_id = $pid";

$queryz = $dbh->prepare($sqlz);

$queryz->execute();
header("Location: user_tables.php");
  }
?>