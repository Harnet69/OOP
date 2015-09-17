<?
session_start();
echo "<h1>Обработка исключений</h1>";
try {
	$a = 1;
	$b = 0;	
		if ($b ==0){
			throw new Exception ("на ноль делить нельзя!<br>");// сообщение, которое выводится в "кетче" методом $e->GetMessage
		}
		$c = $a/$b;
		echo "Бубастик - жевастик<br>";
	}
	catch (Exception $e){
		echo "Ошибка : ".$e->GetMessage()."<br>";
		echo "В строке : ".$e->GetLine()."<br>";
		echo "В файле : ".$e->GetFile()."<br>";
	}
	echo "А код продолжается<hr>";
	////////////////////////////////////////////////////
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	try {
		if (!$_POST['name']){
			throw new Exception ("Вы не ввели своё имя!");
		}
		if (!$_POST['lastname']){
			throw new Exception ("Вы не ввели свою фамилию!");
		}
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$user = new user($name, $lastname);
		$user->ShowUser();
	}
	catch (Exception $e){
		echo $e->GetMessage();
	}
	
}
class user {
	public $name;
	public $lastname;
	function __construct($n, $l){
		$this->name = $n;
		$this->lastname = $l;
	}
	function ShowUser(){
		echo "Имя пользователя ".$this->name."<br>";
		echo "Фамилия пользователя ".$this->lastname."<br>";
	}
}
?> 
<h1>Отработка try/catch</h1>
<form action="<?$_SERVER['REQUEST_URI']?>" method="POST">
	<p>Имя пользователя <input type="text" name="name" value="<?=$_POST['name']?>"></p>
	<p>Фамилия пользователя <input type="text" name="lastname" value="<?=$_POST['lastname']?>"></p>
	<p><input type="submit" value="Отправить" ></p>
</form>

