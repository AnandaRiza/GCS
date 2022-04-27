<?php 
include('../includes/config.php');

if(isset($_REQUEST['pkgid']))
	{
$pid=intval($_GET['pkgid']);


$sqlz="UPDATE subsidies_pckg SET  sub_status = 'Not Approved' WHERE package_id = $pid";

$queryz = $dbh->prepare($sqlz);

$queryz->execute();
header("Location: subsidies_tables.php");
  }
?>