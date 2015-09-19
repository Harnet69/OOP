<?
function __autoload($class_name){
	include 'classes/'.$class_name.'.class.php';
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
$user0 = new SuperUser('Vasya','vasya','000','admin');
$user->showInfo();
$user->getInfo();
echo '<hr>';
echo 'All users : '.User::$countU;
echo '<hr>';
echo 'All Superusers : '.SuperUser::$countSU;
echo '<hr>';

/*class News{
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
echo $unit2->role.'<br>';*/
?>