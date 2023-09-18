<?php 
include_once("../includes/db_config.php");
$id = $_GET['id'];
$sql = "DELETE FROM notice WHERE id='$id'";
$db->query($sql);
session_start();
$_SESSION['delete_msg']="Delete Notice";
header("Location:all_notice_board.php");

?>