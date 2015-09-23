<?class SuperUser extends User{
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