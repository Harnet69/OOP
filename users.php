<?
class User{
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

class superUser extends User{
	public $role;
	
	
}
$user1 = new User('Ivan','ivan','123');
$user1->showInfo();
$user2 = new User('Petr','petr','456');
$user2->showInfo();
$user3 = new User('John','john','789');
$user3->showInfo();
$user4 = clone $user3;
$user4->showInfo();
$user = new superUser('Vasya','vasya','000');
$user->role = 'admin';
$user->showInfo();
echo 'Role : '.$user->role.'<br>';
?>