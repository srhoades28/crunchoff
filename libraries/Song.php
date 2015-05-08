
<?php
class Song{

	private $dbh;

	/*
	*Make the constructor with a database
	*connect first
	*/
	public function __construct(){
		$this->dbh = new Database();
	}

	/*
	*Get all current songs from the database. 
	*/
	public function getAllCurrent(){
		$query = "SELECT * FROM songs WHERE current = 1";
		$this->dbh->query($query);
		return $this->dbh->resultset();
	}
	
	public function getCurrentRows(){
		$query = "SELECT * FROM songs WHERE current = 1";
		$this->dbh->query($query);
		$this->dbh->execute();
		return $this->dbh->rowCount();
	}
}