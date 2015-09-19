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
		$arr = array($user);
		foreach($this as $k->$v){
			$arr[$k] = $v;
			echo $k;
		}
	}
}

$user1 = new User('John','john','123');
$user2 = new User('Вася','ДодО','ва');
echo $user1->name." ";
echo $user1->login." ";
echo $user1->pass."<br>";
?>