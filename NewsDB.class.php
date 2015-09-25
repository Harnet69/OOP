<?php
require 'INewsDB.class.php';

class NewsDB implements INewsDB{
	protected $_db;
	
	const DB_NAME = 'Z:\home\oop\www\news.db';
	
	function __construct(){
		if(is_file(self::DB_NAME)){
			$this->_db = new SQLite3(self::DB_NAME);
		}else{
			$this->_db = new SQLite3(self::DB_NAME);
			$sql = "CREATE TABLE msgs(
						id INTEGER PRIMARY KEY AUTOINCREMENT,
						title TEXT,
						category INTEGER,
						description TEXT,
						source TEXT,
						datetime INTEGER)";
			$this ->_db -> exec($sql) or die($this ->_db);
		}
	}
	function __destruct(){
		unset($this->_db);
	}
	function saveNews($title, $category, $description, $source){}
	/**
	*	Выборка всех записей из новостной ленты
	*	
	*	@return array - результат выборки в виде массива
	*/
	function getNews(){}
	/**
	*	Удаление записи из новостной ленты
	*	
	*	@param integer $id - идентификатор удаляемой записи
	*	
	*	@return boolean - результат успех/ошибка
	*/
	function deleteNews($id){}
}
$news = new NewsDB;
?>