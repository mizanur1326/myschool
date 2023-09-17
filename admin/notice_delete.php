<?php 
include_once("../includes/db_config.php");
$id = $_GET['id'];
$sql = "DELETE FROM notice WHERE id='$id'";
$db->query($sql);
header("Location:all_notice_board.php");

?>