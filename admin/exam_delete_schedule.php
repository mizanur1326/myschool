<?php 
include_once("../includes/db_config.php"); // Include your database configuration file here
$id = $_GET['id'];
$sql = "DELETE FROM exam WHERE id = '$id'";
$db->query($sql);
session_start();
$_SESSION['delete_msg']="Delete Exam Schedule";
header("Location:all_exam_schedule.php");

?>