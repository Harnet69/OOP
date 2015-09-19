<?
class SuperUser extends User implements ISuperUser{
	public $role;
	public static $countSU = 0;
	
	function __construct($n, $l, $p, $r){
		parent:: __construct($n, $l, $p);
		$this->role = $r;
		++self::$countSU;
		--parent::$countU;
	}
	
	function showInfo(){
		parent:: showInfo();
		echo 'Role : '.$this->role.'<br>';
	}
	
	function getInfo(){
		echo '<hr>';
		$arr = array();
		foreach($this as $k=>$v){
			$arr[$k] = $v;
			echo $k.' : '.$v.'<br>';
		}
		return $arr;
		echo '<hr>';
		///return (array)$this;
	}
}
?>