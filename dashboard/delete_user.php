<?php 
session_start();
error_reporting(0);
include('../includes/config.php');
$pid=intval($_GET['pkgid']);

$sql="DELETE FROM user WHERE user_id= $pid";

$query = $dbh->prepare($sql);
// $query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->execute();

header("Location: user_tables.php");
?>