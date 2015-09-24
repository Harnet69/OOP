
<?

class Serialize {
	private $login;
	private $password;
	private $arr = array();
	
	function __construct($login, $password){
		$this->login = $login;
		$this->password = $password;
	}
	
	function __set($n, $v){
		$this->arr[$n] = $v;
	}
	
	function __get($n){
		return "Ебаааа ".$this->arr[$n];
	}
	
	function __sleep(){
		
	}
}

?> 