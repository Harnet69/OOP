<?
class User extends AUser{
	public $name;
	public $login;
	public $password;
	public static $countU = 0;
	
	function __construct($n, $l, $p){
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
		++self::$countU;
	}
	
	function showInfo(){
		echo '<p>Name : '.$this->name.'<br> Login : '.$this->login.'<br> Password : '.$this->password.'<br>';
	}
		
	function __destruct(){
		echo '<br>User - '.$this->login.' deleted';
	}
	
	function __clone(){
		$this->name = 'Guest';
		$this->login = 'guest';
		$this->password = '111';
		++self::$countU;
	}
}
?>