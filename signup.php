<?php

include_once("config/HappLabEmployee.php");

$happLab = new HappLabEmployee();

if(isset($_POST['submit']))
{
	$name= $happLab->escape_string($_POST['fullname']);
	$designation= $happLab->escape_string($_POST['designation']);
	$age= $happLab->escape_string($_POST['age']);
    $query = "INSERT INTO employee(name,designation,age) VALUES('$name','$designation',$age)";
    $result = $happLab->saveData($query);
	
	if($result == false)
	{
		echo "Data NOt Inserted";
	}
	
    header("Location: index.php");
}


?>