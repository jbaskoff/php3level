<?php
require_once "INewsDB.class.php";
class NewsDB implements INewsDB{
	const DB_NAME = "news.db";
	private $_db = null;

	function __get($name) {
		if($name == "db")
			return $this->_db;
		throw new Exception("Uknown property", 1);
		
	}
	
	function __construct() {
		$this->_db = new SQLite3(self::DB_NAME);
	}

	function saveNews($title, $category, $description, $source) {

	}
	
	public function getNews() {

	}

	public function deleteNews($id) {

	}
}

$_db = new NewsDB();