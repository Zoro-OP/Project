<?php 
require_once('../db/db_Connect.php');
$username=$_POST['username'];
//echo $username;
$delete=deleteMod($username);
//echo $delete;
header("location: ../views/moderatorSearch.php");

?>