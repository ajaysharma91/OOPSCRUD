<?php
include_once("config/HappLabEmployee.php");
$happLab = new HappLabEmployee();
$id = $happLab->escape_string($_GET['id']);

$query = "DELETE FROM employee WHERE ID = $id";
$happLab->delete($query);

header("Location:index.php");

?>