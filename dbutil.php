<?php
class DbUtil{
	public static $loginUser = "asv6ef"; 
	public static $loginPass = "jieY0oof";
	public static $host = "cs4750.cs.virginia.edu"; // DB Host
	public static $schema = "asv6ef"; // DB Schema
	
	public static function loginConnection(){
		$db = new mysqli(DbUtil::$host, DbUtil::$loginUser, DbUtil::$loginPass, DbUtil::$schema);
	
		if($db->connect_errno){
			echo("Could not connect to db");
			$db->close();
			exit();
		}
		
		return $db;
	}
	
}
?>

