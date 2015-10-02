<?
class GuestDB {
	protected $_db;
	
	const DB_NAME = 'Z:\home\oop\www\note.db';
	
	function __construct(){
		if(is_file(self::DB_NAME)){
			$this->_db = new SQLite3(self::DB_NAME);
		}else{
			$this->_db = new SQLite3(self::DB_NAME);
			$sql = "CREATE TABLE note(
						id INTEGER PRIMARY KEY AUTOINCREMENT,
						title TEXT,
						description TEXT,
						author TEXT,
						datetime INTEGER)";
			$this ->_db -> exec($sql) or die($this ->_db -> lastErrorMsg());
		}
	}
	function __destruct(){
		unset($this->_db);
	}
	function clearStr($data){
		$data = trim(strip_tags($data));
		return $this->_db->escapeString($data);
	}
	function clearInt($data){
		return abs((int)$data);
	}
	function saveNote($title, $description, $author){
		$datetime = time();
		$sql = "INSERT INTO note(
								title, 
								description, 
								author, 
								datetime) 
							VALUES(
							'$title', 
							'$description', 
							'$author', 
							$datetime)";

		$this ->_db -> exec($sql) or die($this ->_db -> lastErrorMsg());
	}
	
	protected function db2Arr($data){
		$arr = array();
		while($row = $data->fetchArray(SQLITE3_ASSOC)){
			$arr[] = $row;
		}
		return $arr;
	}
	
	function getNote(){
		$sql = "SELECT note.id as id, title, description, author, datetime 
					FROM note
					ORDER BY note.id DESC";
		$res = $this->_db->query($sql) or die ($this ->_db -> lastErrorMsg());
		return $this->db2Arr($res);
	}
	
	function editNote($id){
		$sql = "SELECT id, title, description, author FROM note WHERE id = $id";
		$res = $this->_db->query($sql)or die ($this ->_db -> lastErrorMsg());
		$arr = array();
		while($row = $res->fetchArray(SQLITE3_ASSOC)){
			$arr[] = $row;
		}
		return $arr;
	}
	function updateNote($id, $title, $description, $author){
		$sql = "UPDATE note SET title = '$title', description = '$description', author = '$author' WHERE id = $id";
		$this ->_db -> exec($sql) or die($this ->_db -> lastErrorMsg());
	}

	function deleteNote($id){
		$sql = "DELETE FROM note WHERE id=$id";
		$this ->_db -> exec($sql) or die($this ->_db -> lastErrorMsg());
	}
}

?>