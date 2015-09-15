<h1>Подключение к базе данных (не работает если нет базы данных "web" с таблицей "teachers")</h1>
<?
class Connect{
public $host;
public $user;
public $pass;
public $table;
private $db;
	function __construct($h, $u, $p, $t){
		$this->host = $h; 
		$this->user = $u; 
		$this->pass = $p; 
		$this->table = $t; 
		$this->db = mysqli_connect ($this->host, $this->user, $this->pass, $this->table) or die (mysqli_error);
	}
	
	function select_all(){
		$result = mysqli_query($this->db, "SELECT* FROM teachers");
		$myrow = mysqli_fetch_array($result);
		while ($myrow = mysqli_fetch_array($result)){
			echo $myrow["name"]."<br>";
			echo $myrow["addr"]."<br>";
			echo $myrow["phone"]."<hr>";
		}
	}
}
$user1 = new Connect("localhost", "admin", "admin", "web");
$user1->select_all();

?> 