<h1>Работа с OOP по версии Harnet</h1>
<?
class User {
	public $name;
	public $login;
	public $password;
	
	function __construct ($n, $l, $p){
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
		echo "Объект ".$this->name." создан<br>";
		echo "Эта сущность принадлежит классу ".__class__."<br>";
	}

	function showInfo(){
		echo "Имя пользователя : ".$this->name.", логин : ".$this->login.", пароль : ".$this->password."<br>";
		echo "Использованный метод ".__METHOD__."<hr>";
	}
}

$user1 = new User("Иван","ivan","12345");
$user1->showInfo();
$user2 = new User("Василий","vasil","34567");
$user2->showInfo();
$user3 = new User("Пётр","petr","98765");
$user3->showInfo();
?> 