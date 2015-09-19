<?
class User{
	public $name;
	public $login;
	public $pass;
	
	function __construct($n, $l, $p){
		$this->name = $n;
		$this->login = $l;
		$this->pass = $p;
	}
	
	function getInfo(){
		$arr = array($user1);
		foreach($this as $k=>$v){
			$arr[$k] = $v;
			echo $k;
		}
	}
}

$user1 = new User('John','john','123');
$user1->getInfo();
$user2 = new User('Вася','ДодО','ва');
	foreach ($user1 as $n=>$v){
		echo $n." : ".$v;
	}
	foreach ($user2 as $n=>$v){
		echo $n." : ".$v;
	}
//echo $user1->name." ";
//echo $user1->login." ";
//echo $user1->pass."<br>";
?>