<?php 
$id = $_GET["id"];
require_once("../includes/db_config.php");
$db->query("DELETE FROM teachers WHERE t_id = '$id'");
header("Location: all_teacher.php");
?>