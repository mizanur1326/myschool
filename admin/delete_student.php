<?php 
session_start();
$id = $_GET["id"];
require_once("../includes/db_config.php");
$db->query("DELETE FROM students WHERE s_id = '$id'");
$_SESSION['delete_msg'] ="Data Deleted" ;
header("Location:all_student.php");
?>