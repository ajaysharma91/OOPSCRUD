
<?php
class DbConfig
{
   private $_hostname="localhost:3308";
   private $_username ="root";
   private $_password = "";
   private $_database = "happlab";

   protected $connection;

   public function __construct(){
            if(!isset($this->connection))
            {

            	$this->connection = new mysqli($this->_hostname,$this->_username,$this->_password,$this->_database);

            	if (!isset($this->connection)) {
            		# code...
            		echo "Connection not established";
            	}
            	
            }   
            return $this->connection;  

   }
}

?>