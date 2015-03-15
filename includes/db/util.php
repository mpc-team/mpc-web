<?php

#
#
# 	Database Functions
#
#

class dbutil
{
	public $host = '';
	public $user = '';
	public $pass = '';
	public $name = '';
	public $mysqli = null;

	public function __construct($host, $user, $pass, $dbname)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->name = $dbname;
	}
	
	public function connect()
	{
		$this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->name);
		if ($this->mysqli->connect_errno) {
			echo '<h2>Failure:</h2><em>' . $this->mysqli->connect_error . '</em>';
			return false;
		} 
		echo '<h2>Successful Connection Established to Database</h2>';
		return true;
	}
	
	// query(sql-statement) - results of this query must be closed via
	// 						$result->close() as of currently.
	public function query($sql)
	{
		return $this->mysqli->query($sql);
	}
	
}


 ?>