<?php
include_once("DbConfig.php");

class HappLabEmployee extends DbConfig{


public function __construct(){

	parent::__construct();
}

public function getData($query)
{
	$result  = $this->connection->query($query);
	
	if($result==false)
	{
		return false;
	}

	$rows = array();
	while($row = $result->fetch_assoc())
	{
		$rows[] = $row;
	}
    return $rows;
}


public function saveData($query)
{
    
	$result  = $this->connection->query($query);
	
	if($result==false)
	{
		echo "data not inserted";
		return false;
	}
	else
		return true;

	
}

public function update($query)
{

	$result  = $this->connection->query($query);
	if($result==false)
	{
		echo "data not inserted";
		return false;
	}
	else
	{
		echo "data sucessfully inserted";
		return true;
	}

}

public function delete($query)
{
	$result  = $this->connection->query($query);
	if($result==false)
	{
		echo "data not deleted";
		return false;
	}
	else
	{
		echo "data sucessfully deleted";
		return true;
	}
}

 public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }

}


?>