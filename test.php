<?
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	try {
		if (!$_POST['name'] or !$_POST['lastname']){
			throw new Exception ("Вы не ввели своё имя или фамилию!");
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
}?>
<h1>Отработка try/catch</h1>
<form action="<?$_SERVER['REQUEST_URI']?>" method="POST">
	<p>Имя пользователя <input type="text" name="name" ></p>
	<p>Фамилия пользователя <input type="text" name="lastname"></p>
	<p><input type="submit" value="Отправить" ></p>
</form>
