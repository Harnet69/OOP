<h1>Работа с OOP по версии Harnet</h1>
<?
class User 
{
	public $name;
	public $login;
	public $password;
	
	function __construct ($n, $l, $p)
	{
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
		echo "Объект ".$this->name." создан<br>";
		echo "Эта сущность принадлежит классу ".__class__."<br>";
	}
		
	function __clone()
	{
		echo "Объект ".$this->name." Клонирован<br>";
		$this->name =  "Клонированный ". $this->name;
	}
	
	
	function __destruct()
	{
		echo "Объект ".$this->name." удалён<br>";		
	}

	function showInfo()
    {
		echo "Имя пользователя : ".$this->name.", логин : ".$this->login.", пароль : ".$this->password."<br>";
		echo "Использованный метод ".__METHOD__."<br>";
	}
}

class MyUser extends User
{
	public $age;
	function __construct ($n, $l, $p, $a)
	{
		parent:: __construct ($n, $l, $p);
		$this->age = $a;		
	}
	function showInfo()
	{
		parent:: showInfo();
		echo "Возраст ".$this->age."<br>";
	}
	
}

/*$user1 = new User("Иван","ivan","12345");
$user1->showInfo();
$myuser = clone $user1;
$myuser->showInfo();
$user2 = new User("Василий","vasil","34567");
$user2->showInfo();
$user3 = new User("Пётр","petr","98765");
$user3->showInfo();
echo "Код закончился, можно приступать к удалению<hr>"; 
$myuser1 = new MyUser("Яша","Yasha","11111", "25");
$myuser1->showInfo();*/

class Mod{
	public $name;
	public $lastname;
	public $password;	
	
	function __construct($n, $l, $p){
		$this->name = $n;
		$this->lastname = $l;
		$this->password = $p;
	}
	
		function ShowMy()
	{
		echo $this->name." ".$this->lastname." ".$this->password;	
	}
}
class MyMod extends Mod
{
	function __construct($r, $n, $l, $p){
		parent:: __construct($n, $l, $p);
		$this->role = $r;
	}
	function ShowMy()
	{
		echo " ".$this->role." ";
		parent:: ShowMy();
		echo "<hr>";
	}

}
$mod1 = new MyMod("Admin","Андрей","Семёнов","111112");
echo $mod1->ShowMy();
$mod2 = new MyMod("user","Свала","Зиберман","зыффвыва");
echo $mod2->ShowMy();

?> 