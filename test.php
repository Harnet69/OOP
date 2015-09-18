<?
class User {
	static public $mycount=0;
	public $name;
	public $lastname;
	public $age;
	public $town;
	function __construct ($n, $l, $a, $t){
		self::$mycount++;
		$this->name = $n;
		$this->lastname = $l;
		$this->age = $a;
		$this->town = $t;
	}
		function Show(){
		echo $this->name."<br>";
	}	
}

class MuUser extends User{
	final function Show(){
		echo $this->name."<br>";
		echo $this->lastname."<br>";
	}
}

$user1 = new User("Иванов","Иван",25,"Москва");
$user2 = new MuUser("Петров","Пётр",40,"Нижневартовск");
$user3 = new User("Сидор","Сидоров",18,"Задрыщинск");
$user1->Show();
$user2->Show();
echo user::$mycount;



		//foreach ($user1 as $n=>$v){
			//echo $n." - ".$v."<br>";
		//}
		//}
?>