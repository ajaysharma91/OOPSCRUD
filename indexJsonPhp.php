<?php
include_once("config/HappLabEmployee.php");
$happLab = new HappLabEmployee();
$query = "SELECT * FROM employee e INNER JOIN contact c ON c.eid = e.ID";
$result = $happLab->getData($query);
$return_arr = array();
//var_dump($result);
foreach ($result as $key => $value) {
 	# code...
 	$name= $value["name"];
	$designation= $value["designation"];
	$age= $value["age"];
	$fulladdress= $value["fulladdress"];
	$pincode= $value["pincode"];
	
	  $return_arr[] = array(
                    "name" => $name,
                    "designation" => $designation,
                    "age" => $age,
                    "fulladdress" =>$fulladdress,
                    "pincode" =>$pincode
                );

 } 
echo json_encode($return_arr);

?>

