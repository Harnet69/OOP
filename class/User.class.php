<?class User implements ForUser{
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