<?
session_start();
	if (!empty($_SESSION['user']) and !empty($_SESSION['pass']) and !empty($_SESSION['table']) ){
	echo "Спасибо что зашли, ".$_SESSION['user']."<hr>";
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	$table = $_SESSION['table'];
	$user = new Connect("localhost", $user, $pass, $table);
	$user->select_all();
	exit;
	}
if ($_SERVER[REQUEST_METHOD] == "POST"){
	$user = trim(strip_tags($_POST['user']));
	$pass = trim(strip_tags($_POST['pass']));
	$table = (strip_tags($_POST['table']));
	$_SESSION['user'] = $user;
	$_SESSION['pass'] = $pass; 
	$_SESSION['table'] = $table; 
	header("Location:".$_SERVER['REQUEST_URI']);
}
class Connect{
public $host;
public $user;
public $pass;
public $table;
private $db;
	function __construct($h, $u, $p, $t){
		$this->host = "localhost"; 
		$this->user = $u; 
		$this->pass = $p; 
		$this->table = $t; 
		$this->db = mysqli_connect ($this->host, $this->user, $this->pass, $this->table) or die (mysqli_error());
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

?> 
<h1>Подключение к базе данных (не работает если нет базы данных "web" с таблицей "teachers")</h1>
<form action="<?$_SERVER['REQUEST_URI']?>" method="POST">
	<p>Имя пользователя <input type="text" name="user" value="<?= $user ?>"></p>
	<p>Пароль           <input type="text" name="pass" value="<?= $pass ?>"></p>
	<p>Имя таблицы <input type="text" name="table" value="<?= $table ?>"></p>
	<p><input type="submit" value="Отправить" ></p>
</form>