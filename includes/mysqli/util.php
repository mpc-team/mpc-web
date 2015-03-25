<?php
class dbutil {
	public $host = '';
	public $user = '';
	public $pass = '';
	public $name = '';
	public $connected = false;
	public $mysqli = null;

	public function __construct($host, $user, $pass, $dbname)	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->name = $dbname;
	}
	
	public function query($sql)	{
		return $this->mysqli->query($sql);
	}
	
	public function connect()	{
		$this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->name);
		if ($this->mysqli->connect_errno) {
			$this->connected = false;
			return false;
		}
		$this->connected = true;
		return true;
	}
	
	public function disconnect() {
		$this->mysqli->close();
		$this->connected = false;
	}
}


 ?>