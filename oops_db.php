<?php

class Database{
	
	public $db;
	public $servername="localhost";
	public $username="root";
	public $password='';
	public $database = 'alumni';
	
	
	 public function __construct()
	 {
		 $this->db = mysqli_connect($this->servername,$this->username,$this->password,$this->database);
		 
		// if($this->db)
//		 {
//			 echo "connected";
//		 }
//		 else 
//		 {
//			 echo "Not Connected";
//		 }
    }
		public function __destruct()
	{
		mysqli_close($this->db);
	}
			
}

$obj = new Database();


	//class insert_data extends database
//	{
//		$mydb=database->getDB();
//		function __construct($db)
//		{
//			$mydb=$db;
//		}
//		function insert_data1($table_name,$values)
//		{
//			$query="INSERT INTO $table_name VALUES('".implode("','",$values)."')"; 
//			echo $query;
//			mysqli_query($this->mydb,$query);
//		}
//	}	

?>