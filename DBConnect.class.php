<?php 
class DBConnect {
	static $db;
	private $dbh;
	private function DBConnect() {
		try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=mwalima-opdracht', 'root', '');
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public static function getInstance() { 
		if (!isset(DBConnect::$db)) { 
			DBConnect::$db = new DBConnect() ; 
		} 
		return DBConnect::$db->dbh; 
	} 

}
?>