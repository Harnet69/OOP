<?
class User{
	public $name;
	public $login;
	public $password;
	
	function showInfo(){
		echo '<p>Name : '.$this->name.'<br> Login : '.$this->login.'<br> Password : '.$this->password.'<br>';
	}
}
$user1 = new User();
$user1->name = 'Ivan';
$user1->login = 'ivan';
$user1->password = 123;
$user2 = new User();
$user2->name = 'Petr';
$user2->login = 'petr';
$user2->password = 456;
$user3 = new User();
$user3->name = 'John';
$user3->login = 'john';
$user3->password = 789;
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

?>