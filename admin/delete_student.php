<?php 
require_once("../includes/db_config.php");
$id = $_GET["id"];
$db->query("DELETE FROM students WHERE s_id = '$id'");
session_start();
$_SESSION['delete_msg'] ="Data Deleted" ;
header("Location:all_student.php");
?>