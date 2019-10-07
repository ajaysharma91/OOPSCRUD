<?php
include_once("config/HappLabEmployee.php");
$happLab = new HappLabEmployee();
$query = "SELECT * FROM employee";
$result = $happLab->getData($query);
$return_arr = array();
foreach ($result as $key => $value) {
 	# code...
 	$name= $value["name"];
	$designation= $value["designation"];
	$age= $value["age"];
	  $return_arr[] = array(
                    "name" => $name,
                    "designation" => $designation,
                    "age" => $age);

 } 
echo json_encode($return_arr);

?>

