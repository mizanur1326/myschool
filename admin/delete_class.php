<?php 
$id = $_GET["id"];
require_once("../includes/db_config.php");
$db->query("DELETE FROM class WHERE c_id = '$id'");
header("Location: all_class.php");
?>