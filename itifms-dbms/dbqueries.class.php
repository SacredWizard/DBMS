<?php 

//It Inherti the properties of class Dbconn

class dbqery extends Dbconn
{
	//Function which select all the queries from table
	function getAllValues($table)
	{
		$qry = "SELECT * FROM ".$table;
		
		return $this->SelectQuery($qry);
	}
	//Function which select all the queries from table of selected id
	function getAllWhere($table,$id)
	{
		$qry = "SELECT * FROM ".$table." WHERE ".$id;
		return $this->SelectQuery($qry);
	}
	//Function which insert the values into a table
	function InsertValues($table,$admin)
	{	
		foreach($admin as $key => $val)
		{
			$keysAry[] = $key;
			$valsAry[] = "'".$val."'";
		}
		$keys = implode("," ,$keysAry);
		$vals = implode("," ,$valsAry);
	
		$qry = "INSERT INTO ".$table." (".$keys.") VALUES (".$vals.")";
	
		return $this->InsertQuery($qry);
	}
	//Function which updates the table 
	function UpdateValues($table,$edit,$where)
	{
		foreach($edit as $key => $val)
		{
			$keysAry[] = $key;
			$valsAry[] = "'".$val."'";
		} 
		for($i=0; $i<count($keysAry); $i++)
		{
			if($str == "")
			{
				$str .=$keysAry[$i].'='."$valsAry[$i]";
			}
			else
			{
				$str .= "," .$keysAry[$i].'='."$valsAry[$i]";
			}
		}
		$qry = "UPDATE ".$table." SET ".$str." WHERE ".$where."";
		return $this->UpdateQuery($qry);
	}
	//Function which deletes the given querytable
	function DeleteQry($table,$where)
	{
		$qry = "DELETE  FROM ".$table." WHERE ".$where;
		return $this->executeQuery($qry);
	}
	//Function which call class to select the queries from database
	function loginAdm($table,$where)
	{
		$qry ="SELECT Name,Password FROM " .$table." WHERE ".$where;
		return $this->SelectQuery($qry);
	}
}

?>