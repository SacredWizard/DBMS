<?php 
class Dbconn
{
	public $db_root;
	public $db_username;
	public $db_password;
	
	//Function which connects to the database
	function dbconn()
	{
		$this->conn = mysql_connect(DBROOT,DBUSERNAME,DBPASSWORD);
		$this->dbname = mysql_select_db(DATABASENAME);
	}
	
	//Function which 	
	function SelectQuery($qry)
	{
		$sql = mysql_query($qry,$this->conn);
		$result = array();
		while($res = mysql_fetch_assoc($sql))
			array_push($result,$res);
			return $result;
	}
	function InsertQuery($qry)
	{
		$sql = mysql_query($qry,$this->conn);
		
		$insert = mysql_insert_id();
		return $insert;
	}
	function UpdateQuery($qry)
	{
		$sql = mysql_query($qry,$this->conn);
		return $sql;
	}
	function executeQuery($qry)
	{
		$sql = mysql_query($qry,$this->conn);
		return $sql;
	}
	
} 

?>