<?
interface ISuperUser{
	function getInfo();
}
abstract class AUser{
	abstract function showInfo();
}

class User extends AUser{
	public $name;
	public $login;
	public $password;
	
	function __construct($n, $l, $p){
		$this->name = $n;
		$this->login = $l;
		$this->password = $p;
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
	}
}

class SuperUser extends User implements ISuperUser{
	public $role;
	
	function __construct($n, $l, $p, $r){
		parent:: __construct($n, $l, $p);
		$this->role = $r;
	}
	
	function showInfo(){
		parent:: showInfo();
		echo 'Role : '.$this->role.'<br>';
	}
	
	function getInfo(){
		$arr = array($user);
		foreach($this as $k->$v){
			$arr[$k] = $v;
			echo $k;
		}
		return $arr;
		///return (array)$this;
	}
}
$user1 = new User('Ivan','ivan','123');
$user1->showInfo();
$user2 = new User('Petr','petr','456');
$user2->showInfo();
$user3 = new User('John','john','789');
$user3->showInfo();
$user4 = clone $user3;
$user4->showInfo();
$user = new SuperUser('Vasya','vasya','000','admin');
$user->showInfo();
$user->getInfo();

echo '<hr>';

class News{
	public $name;
	protected $lastname;
	private $password;	
	
	function __construct($n, $l, $p){
		$this->name = $n;
		$this->lastname = $l;
		$this->password = $p;
	}
	
	function ShowNew(){
		echo '<br>'.$this->name.' '.$this->lastname.' '.$this->password;	
	}
}
class NewNews extends News{
	public $name;
	public $lastname; 
	public $password;
	public $role;
	
	function __construct($n, $l, $p, $r){
		parent:: __construct($n, $l, $p);
		$this->role = $r;
	}
	
	function ShowNew(){
		parent:: ShowNew();
		echo ' '.$this->role;		
		echo '<hr>';
	}
}
$unit1 = new News('One','First','000');
echo $unit1->ShowNew();
$unit2 = new NewNews('Two','Second','111', 'Admin');
echo $unit2->ShowNew();
echo $unit2->name.'<br>';
echo $unit2->lastname.'<br>';
echo $unit2->password.'<br>';
echo $unit2->role.'<br>';
?>