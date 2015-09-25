<?php
require 'INewsDB.class.php';

class NewsDB implements INewsDB{
	protected $_db;
	
	const DB_NAME = 'Z:\home\oop\www\news.db';
	
	function __construct(){
		$this->_db = new SQLite3(self::DB_NAME);
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