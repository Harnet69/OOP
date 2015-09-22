<?
/*class A{
	static function A1(){
		echo "A1";
	}
	static function A2(){
		static::A1();//работает позднее статическое связывание
	}
}
class B extends A{
	static function A1(){
		echo "В";
	}
}
B::A2();
*/
interface ForUser {
	function GiveName();
}

class User implements ForUser{
	public $name;
	public $lastname;
	public $password;
	public static $cntu = 0;	
	function __construct($n, $l, $p){
		self:: $cntu++;		
		$this->name = $n;
		$this->lastname = $l;
		$this->password = $p;
	}
	
	function __clone(){
		$this->name = "Клонированный ".$n;
		self:: $cntu++;
	}
	
	function ShowUser(){
		echo $this->name." ".$this->lastname." ".$this->password."<br>";
	}
	
	function GiveName(){
		return $this->name;		
	}
	
	static function Hi(){
		echo "Hi everyone!<br>";
	}
	
	function showSV(){
		foreach($this as $n=>$p){
			echo $n." : ".$p."<br>";
	}
	}
}

class SuperUser extends User{
	public $role;
	public static $cntsu = 0;
	
	function __construct($n, $l, $p, $r){
		parent:: __construct($n, $l, $p);
		$this->role = $r;
		self:: $cntsu++;
		parent:: $cntu--;
		
	}
	
	function ShowUser(){
		parent:: ShowUser();
		echo $this->role."<hr>";
	}
} 

$user1 = new User("Иван", "Иванов", 12345);
$user1->ShowUser();
$user2 = new User("Пётр", "Петров", 23456);
$user2->ShowUser();
$user3 = clone $user1;
$user3->ShowUser("Сидор", "Сидоров", 343545);
$user4 = new User("Феликс", "Феликсов", "1wqeqw345");
$user4->ShowUser();
$SuperUser1 = new SuperUser("Админ", "Админов", "addь", "Я АДМИН!");
$SuperUser1->ShowUser();
$SuperUser2 = new SuperUser("Админ2", "Админов2", "a1ddь", "Я 2 АДМИН!");
$SuperUser2->ShowUser();
echo $a = $user1->GiveName()."<br>";
echo "Создано Юзеров ".user::$cntu."<br>";
echo "Создано Суперюзеров ".SuperUser::$cntsu."<br>";
user::Hi();
$user1->showSV();

/*if (is_a($SuperUser1, User)){// преверяется наследование, т.е. есть ли в наследником у User $SuperUser1
	echo "Всё окей!";
}
else {
	echo "Всё плохо";
}
if ($SuperUser1 instanceOf  User){// преверяется наследование, т.е. есть ли в наследником у User $SuperUser1
	echo "Всё окей!";
}
else {
	echo "Всё плохо";
}*/
?>