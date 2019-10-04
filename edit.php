<?php
include_once("config/HappLabEmployee.php");
$happLab = new HappLabEmployee();

if(isset($_POST['update']))
 {  $id = $happLab->escape_string($_POST['id']);
 	$name = $happLab->escape_string($_POST['fullname']);
 	$designation = $happLab->escape_string($_POST['designation']);
 	$age = $happLab->escape_string($_POST['age']);
  
 	 $query = "UPDATE employee SET name = '$name', designation='$designation', age=$age WHERE ID=$id";
	$result = $happLab->update($query);
	if($result == false)
	{
		echo "Data NOt Inserted";
	}
	header("Location: index.php");
 }

 ?>